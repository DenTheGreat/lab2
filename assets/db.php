<?php
$connServername = "localhost";
$connUsername = "root";
$connPassword = "";
$connName = "maksymenko";

// Create connection
$conn = mysqli_connect($connServername, $connUsername, $connPassword, $connName,"3306");
mysqli_set_charset($conn,'utf8');
$conn_catalog = mysqli_select_db($conn, "maksymenko");

function adduser($firstname, $lastname, $email, $password, $role)
    {
        global $conn;
        $sql = "INSERT INTO  users (firstname, lastname, email, password, role_id) VALUES('$firstname', '$lastname', '$email', '$password', '$role')";
        $result = mysqli_query($conn, $sql);
    }

    function getuser($id){
    	global $conn;
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    function getuserlist(){
        global $conn;
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    function getrole($email){
        global $conn;
        $sql = "SELECT role_id FROM users WHERE email = '$email'"; 
        $result = mysqli_query($conn, $sql)->fetch_object()->role_id;
        return $result;
    }

    function getuserid($email){
        global $conn;
        $sql = "SELECT id FROM users WHERE email = '$email'"; 
        $result = mysqli_query($conn, $sql)->fetch_object()->id;
        return $result;
    }

   function checklogin($email, $password){
        global $conn;
        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'"; 
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        return $row;
    }

    function updateuser($firstname, $lastname, $email, $password, $role, $id)
    {
        global $conn;
        $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', password='$password', role_id='$role' where id='$id' ";
        $result = mysqli_query($conn, $sql);
    }

    function updatepic($id, $filename)
    {
        global $conn;
        $sql = "UPDATE users SET photo='$filename' where id='$id'";
        $result = mysqli_query($conn, $sql);
    }

    function deletepidor($id)
    {
        global $conn;
        $sql = "DELETE FROM users where id='$id'";
        $result = mysqli_query($conn, $sql);
    }



?>