<?php
include 'connect.php';
    $username = $_GET["username"];
    $query = mysqli_query($conn, "select * from `web2_tb` WHERE username = '$username'");
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <center>
    <h2>Edit User</h2>
    <form method="post" action="update.php?id=<?php echo $username;?>">
        <label>User Name: </label><input type="text" value="<?php echo $row['username'];?>" name="username" style="font-family: Georgia, 'Times New Roman', Times, serif;"><br>
        <label>User Password: </label><input type="password" value="<?php echo $row['userpassword'];?>" name="userpassword" style="font-family: Georgia, 'Times New Roman', Times, serif;"><br>
        <label>User Type: </label><input type="text" value="<?php echo $row['usertype'];?>" name="usertype" style="font-family: Georgia, 'Times New Roman', Times, serif;"><br>
        <label>Full Name: </label><input type="text" value="<?php echo $row['fullname'];?>" name="fullname" style="font-family: Georgia, 'Times New Roman', Times, serif;"><br>
        <label>Full Name: </label><input type="text" value="<?php echo $row['fullname'];?>" name="fullname" style="font-family: Georgia, 'Times New Roman', Times, serif;"><br>
        <label>Age: </label><input type="text" value="<?php echo $row['age'];?>" name="age" style="font-family: Georgia, 'Times New Roman', Times, serif;"><br>
        <button type="submit" name="submit" style="color:black;">Submit</button>
       
        <button><a href="list.php" style="text-decoration: none; color:black;">Back</a></button>
    </form>
    </center>
    
</body>
</html>