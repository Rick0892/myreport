 <?php

 class dbcon
 {

   protected function connect()
   {
     $username = 'root';
     $password = '';
     //connection to the databse
     try {
     $db = new PDO("mysql:host=localhost;dbname=coder_portal", $username, $password);
     // set the PDO error mode to exception
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     //echo "Connected successfully";
     return $db;
     }
 catch(PDOException $e)
     {
     echo "Connection failed: " . $e->getMessage();
     }
 }
 }

 ?>
