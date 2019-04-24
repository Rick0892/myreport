<?php
class users extends dbcon
{
  //login for users
  public function loginUsers($index, $password)
  {
    //dehasing the password for users
    $stmt =$this->connect()->prepare("SELECT * from users where index_no=?");
    $stmt->execute([$index]);
    $result=$stmt->fetch();
    $student_id=$result['index_no'];
    $hash_password=$result['password'];

    if ($index == $student_id)
    {
      if (password_verify($password,$hash_password))
      {
          $result=$this->connect()->query("SELECT * from users where index_no=? ");
          $check=$result->fetch();

          $_SESSION['email'] = $check['email'];
          $_SESSION['fullname'] = $check['fname'];
          $_SESSION['department'] = $check['department'];
          $_SESSION['position'] = $check['position'];
          $_SESSION['id'] = session_id();
          $_SESSION['login_type'] = "students";

         echo '<script>window.location.assign("home");</script>';
      }
        else
        {
         
          $error = "Password Error";
        return $error;
        }

    }

    //for userid
          else
          {
            
            $noUser = "Sorry User Doesn't Exits";
            return $noUser;
          }
  }

  //login for users
  public function loginAdmin($email, $password)
  {
    //dehasing the password for fault admin
    $stmt =$this->connect()->prepare("SELECT * from `admin` where email=?");
    $stmt->execute([$email]);
    $result=$stmt->fetch();
    $staff_id=$result['email'];
    $hash_password=$result['password'];

    //for admins
    if ($email == $staff_id)
    {
      if (password_verify($password,$hash_password)) {
        $result=$this->connect()->prepare("SELECT * from `admin` where email=? ");
        $result->execute([$email]);
          $check=$result->fetch();

          $_SESSION['email'] = $check['email'];
          $_SESSION['fullname'] = $check['fname'];
          $_SESSION['role'] = $check['role'];
          $_SESSION['school'] = $check['school'];
          $_SESSION['id'] = session_id();
          $_SESSION['login_type'] = "schooladmin";

         echo '<script>window.location.assign("portal/admin/index");</script>';
      }
        else
        {
         
          $error = "Password Error";
        return $error;
        }

    }
      else
          {
            
            $noUser = "Sorry User Doesn't Exits";
            return $noUser;
          }
  }

  public function userId($email)
  {
    $user = $this->connect()->query("SELECT * from `users` where `email` = '$email'");
    $view_user = $user->fetch();
    return $view_user;
  }

  public function checking($email)
  {
    //checking if admin already exits
    $issue = $this->connect()->query("SELECT * from `users` where `email` = '$email'");
    $email_fetch = $issue->fetch();
    $email_id = $email_fetch['email'];

    return $email_id;
  }
  public function insert($fields)
  {
    //inserting into the database
     $columns = implode(', ',array_keys($fields));
    //
     $values = implode(", :",array_keys($fields));

    $sql = "INSERT into users($columns) values (:".$values.")";

    $stmt1 = $this->connect()->prepare($sql);

     foreach ($fields as $key => $value)
     {
      $stmt1->bindvalue(':'.$key,$value);
    }

    $stmt1->execute();
  }

}

 ?>
