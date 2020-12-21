<?php
session_start();
  require 'assets/db.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (checklogin($email,$password)==1){
    
    echo '<p>', $email, '<p>' ,$password, '<p>';
    $id =  getuserid($email);
    //echo 'id = ', $id;
$role=getrole($email); 
          $_SESSION["id"] = $id;
          $_SESSION["role"] = $role;
          $_SESSION["act"] = 1;
          header('Location: index.php');  
}
else header('Location: index.php');          
            
         //echo '<p>', $_SESSION["id"], '<p>', $_SESSION["role"], '<p>';
?>