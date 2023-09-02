<?php
include('connect.php');
$username = $_GET['username'];

$username = $_POST['username'];
$usertype = $_POST['usertype'];
$userpassword = password_hash($_POST["userpassword"], PASSWORD_DEFAULT);
$fullname = $_POST['fullname'];
$age = $_POST['age'];
mysqli_query($conn, "UPDATE web2_tb SET `username`='$username',`usertype`='$usertype',`userpassword`='$userpassword',`fullname`='$fullname', `age`='$age' WHERE username = '$username'");
header('location:list.php');
?>