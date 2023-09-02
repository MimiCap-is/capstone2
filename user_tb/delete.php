<?php
include("connect.php");

$username = $_GET['username'];
    mysqli_query($conn, "DELETE FROM web2_tb WHERE username = '$username'");
    header('location:list.php');
?>