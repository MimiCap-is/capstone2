<?php

$host="localhost";
$username="root";
$userpassword="";
$db="web2";
session_start();

$conn=mysqli_connect($host,$username,$userpassword,$db);
if($conn===false)
{
    die("connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = password_hash($_POST["userpassword"], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM `web2_tb` WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo '<center>No result Found</center>';
    }
    elseif (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
       // if ($password==$row["UserPassword"]){
            if(password_verify($password,$row["userpassword"]))
            $_SESSION["username"]=$username;  
            $_SESSION["usertype"]=$row["usertype"]; 

            header("location:welcome.php");
        }
        else
        {
        echo "<center><h3>Username or Password incorrect</h3></center>";
        }
    
}
//register
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reg_user"])) {
    $username = $_POST["username"];
    $password = password_hash($_POST["userpassword"], PASSWORD_DEFAULT);
    $usertype = $_POST["usertype"];
    $fullname = $_POST["fullname"];
    $age = $_POST["age"];
    $query = "SELECT * FROM web2_tb WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo "<center>User Already Registered!", "<br></center>";
        echo "<center> Enter a new Username</center>";
       

    }else{
        $sql = "INSERT INTO `web2_tb`(`username`, `userpassword`, `usertype`, `fullname`, `birthdate`, `age`) VALUES ('$username', '$userpassword', '$usertype', '$userfullname', '$bdate', '$edad')";
       
        if (mysqli_query($conn, $sql)){
            echo "<center>Registered Successfully. Please Log In!</center>";

        }else{
            echo "Error!";
        }
    }
 
}


if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save_user"])){
	$username = $_POST["username"];
    $password = password_hash($_POST["userpassword"], PASSWORD_DEFAULT);
	$usertype = $_POST["usertype"];
	$bdate = $_POST["birthdate"]; 
	$userfullname = $_POST["fullname"];
	$current_aldaw = date('Y/m/d');
	
	
	$query = "SELECT * FROM web2_tb WHERE username = '$username'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0){
		echo "<center>User already registered", "<br></center>";
		echo "<center>Please enter a new username</center>";
		echo "<center><a href='register.php'><button>Back</button></a></center>";
	}
    else{
		//calculate age
        $current_aldaw = new DateTime($current_aldaw);
        $bdate = new DateTime($bdate);
        $edad = $current_aldaw->diff($bdate)->y;
        
        $bdate = date('Y/m/d', strtotime($_POST["birthdate"]));
        $sql = "INSERT INTO `web2_tb`(`username`, `userpassword`, `usertype`, `fullname`, `birthdate`, `age`) VALUES ('$username', '$userpassword', '$usertype', '$userfullname', '$bdate', '$edad')";

        if (mysqli_query($conn, $sql)){
            echo "Registration successful. Please login.";

                
        }

	}
}
?>



