<?php

class users extends dbcon
{

  public function numberStudent($school)
  {
    $number_0f_student = $this->connect()->prepare("SELECT * from `students` where `schoolName`=?");
    $number_0f_student->execute([$school]);
    $students = $number_0f_student->rowCount();
    return $students;
  }

  public function numberTeacher($school)
  {
    $number_0f_teacher = $this->connect()->prepare("SELECT * from `teachers` where `schoolName`=?");
    $number_0f_teacher->execute([$school]);
    $teacher = $number_0f_teacher->rowCount();
    return $teacher;
  }

  public function checking($stuId)
  {
    //checking if students id already exits
    $stus_id= $this->connect()->query("SELECT * from `students` where `stuId` = '$stuId'");
    $stus_id_fetch = $stus_id->fetch();
    $stus_id_id = $stus_id_fetch['stuId'];

    return $stus_id_id;
  }

  public function checkingTeacher($teacherId)
  {
    //checking if teacher id already exits
    $teacher_id= $this->connect()->query("SELECT * from `teachers` where `teacherId` = '$teacherId'");
    $teacher_id_fetch = $teacher_id->fetch();
    $teacher_id_id = $teacher_id_fetch['teacherId'];

    return $teacher_id_id;
  }

  public function insertStudent($fields)
  {
    //inserting into the database of students
     $columns = implode(', ',array_keys($fields));

     $values = implode(", :",array_keys($fields));

    $sql = "INSERT into students($columns) values (:".$values.")";

    $stmt1 = $this->connect()->prepare($sql);

     foreach ($fields as $key => $value)
     {
      $stmt1->bindvalue(':'.$key,$value);
    }

    $stmt1->execute();
  }

  public function insertteacher($fields)
  {
    //inserting into the database of teacher
     $columns = implode(', ',array_keys($fields));

     $values = implode(", :",array_keys($fields));

    $sql = "INSERT into teachers($columns) values (:".$values.")";

    $stmt1 = $this->connect()->prepare($sql);

     foreach ($fields as $key => $value)
     {
      $stmt1->bindvalue(':'.$key,$value);
    }

    $stmt1->execute();
  }

  public function userId($email)
  {
    $user = $this->connect()->query("SELECT * from `admin` where `email` = '$email'");
    $view_user = $user->fetch();
    return $view_user;
  }

  public function selectAllFaults($department)
  {
    $stmt = $this->connect()->query("SELECT * from `fault_form` where `department`='$department'");

    if ($stmt->rowCount()) {
      while ($rows = $stmt->fetch()) {
        $data[] = $rows;
      }
      return $data;
    }
  }

  public function viewData($id)
  {
    $read = $this->connect()->query("SELECT * from `fault_form` where `id`='$id' ");
    $read_row = $read->fetch();

    return $read_row;
  }

  
  public function updateReport($fields, $id)
  {
    $st ="";
    $counter = 1;
    $total_fields = count($fields);
    foreach ($fields as $key => $value)
    {
      if($counter === $total_fields){
        $set ="$key = :".$key;
        $st = $st.$set;
      }else {
        $set = "$key = :".$key.",";
        $st = $st.$set;
        $counter++;
      }
    }

    $sql = "";
    $sql.= "UPDATE fault_form set ".$st;
    $sql.=" WHERE id =".$id;

    $stmt = $this->connect()->prepare($sql);

    foreach ($fields as $key => $value) {
      $stmt->bindValue(':'.$key,$value);
    }

     $stmt->execute();
  }

  public function changePassword($opassword,$npassword,$cpassword,$rpassword,$email)
  {
    $user =$this->connect()->query("SELECT * from `users` where `email` = '$email'");
    $view_user = $user->fetch();


    $p_check = $view_user['password'];

    if(password_verify($opassword,$p_check) != $p_check)
    {
      ?>
      <script type="text/javascript">
        swal("Wrong Old Password", "<?php echo "Try again"; ?>", "error");
      </script>
      <?php
    }
    elseif(strlen($npassword)<8)
    {
      ?>
      <script type="text/javascript">
        swal("Passwords Should be more than 8", "<?php echo "Try again"; ?>", "error");
      </script>
      <?php
    }elseif ($npassword!=$cpassword) {
      ?>
      <script type="text/javascript">
        swal("Passwords Do Not Match", "<?php echo "Try again"; ?>", "error");
      </script>
      <?php
    }elseif($npassword==$cpassword)
    {
      $encrypted_password = password_hash($npassword,PASSWORD_DEFAULT);
      $this->connect()->query("UPDATE `users` set `password` = '$encrypted_password' where `email`='$email' ");
      $this->connect()->query("UPDATE `users` set `password_reset`='$rpassword' where `email`='$email' ");

      ?>
      <script type="text/javascript">
        swal("", "<?php echo "Password Changed"; ?>", "success");
      </script>
      <?php
    }else {
      ?>
      <script type="text/javascript">
        swal("Oops!!! Something Went Wrong", "<?php echo "Try again"; ?>", "error");
      </script>
      <?php
    }
  }

  public function selectHead($department)
  {
    $stmt = $this->connect()->query("SELECT * from `fault_department_heads` where `department`='$department'");

    if ($stmt->rowCount()) {
      while ($rows = $stmt->fetch()) {
        $data[] = $rows;
      }
      return $data;
    }
  }

  public function checkHead($head, $department)
  {

  }

  public function insertHead($head, $department)
  {

    //checking if admin already exits
    $issue = $this->connect()->query("SELECT * from `fault_department_heads` where `head_name` = '$head' and `department`='$department'");
    $issue_fetch = $issue->fetch();
    $issue_id = $issue_fetch['head_name'];

    //inserting into the database
      if ($head == $issue_id) {
        ?>
        <script>
          swal("Head Exits","","warning");
        </script>
        <?php

      }else {

        $dpH = $this->connect()->query("SELECT * from `fault_department_heads` where  `department`='$department'");
        $issue_fetch = $dpH->fetch();

        $dph_id = $issue_fetch['department'];
        if ($dph_id == $department)
       {
          $stmt = $this->connect()->query("UPDATE fault_department_heads set `head_name`='$head' where `department`='$department'");
          ?>
          <script>
            swal("Head Update","<?php echo $dph_id; ?>","info");
          </script>
          <?php
        }else {
          $stmt = $this->connect()->query("INSERT into fault_department_heads(`department`,`head_name`) values ('$department','$head')");

             ?>
             <script>
               swal("Head Added","<?php echo $dph_id; ?>","success");
             </script>
             <?php
        }

      }

  }

  public function viewHead($id)
  {
    $read = $this->connect()->query("SELECT * from `fault_department_heads` where `id`='$id' ");
    $read_row = $read->fetch();

    return $read_row;
  }

  public function viewHeadName($department)
  {
    $read = $this->connect()->query("SELECT * from `fault_department_heads` where `department`='$department' ");
    $read_row = $read->fetch();

    return $read_row;
  }
}

 ?>
