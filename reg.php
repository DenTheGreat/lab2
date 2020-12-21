<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reg</title>
</head>
<body>

	<?php
require 'assets/db.php';
if ($_POST["password"] === $_POST["confirm_password"]) {
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$role = $_POST["role"];
$password = $_POST["password"];
adduser($firstname, $lastname, $email, $password, $role);
header('Location: index.php');
}
header('Location: index.php');
?>
	
</body>
</html>