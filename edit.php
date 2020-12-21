<?php
require 'assets/db.php';
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$role = $_POST['role_id'];
updateuser($firstname, $lastname, $email, $password, $role, $id);
echo $firstname, $lastname, $email, $password, $role, $id;
//header('Location: profile.php');

?>