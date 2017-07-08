<?php
try{
  $con = new PDO("mysql:host=localhost;dbname=signup", "root", "12017", array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
   //servername,username,password and database name taken as the parameters.
        echo("Here: ");
  if(isset($_POST["signup"]))
  {
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $statement = "INSERT INTO user (username,gender,address,email,password) VALUES (:username,:gender,:address,:email,:password);";
        $insert = $con->prepare($statement);
        $insert->bindValue(':username' , $username);
        $insert->bindValue(':gender' , $gender);
        $insert->bindValue(':address' , $address);
        $insert->bindValue(':email' , $email);
        $insert->bindValue(':password' , $password);
        $insert->execute();
        
   }
 }
      
      catch(PDOException $e)
      {
        echo "Error" .$e->getMessage();
       }
      

?>
