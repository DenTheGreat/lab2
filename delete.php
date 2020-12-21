<?php 
session_start();
$id = $_POST['id'];
require 'assets/db.php';
deletepidor($id);
if ($_SESSION["id"] == $id){
session_unset();
session_destroy();
header('Location: index.php');
}
else {
header('Location: index.php'); 
}
?>