<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>

</head>
<body>
  <?php include_once 'search.php' ?>

  <hr>
    <center>
    <h2>List of Users</h2>
    <table style="width:85%; border-collapse:collapse; color:black; " border="3">
    <thead>
        <tr>
            <th><strong>User Name</strong></th>
            <th><strong>User Password</strong></th>
            <th><strong>User Type</strong></th>
            <th><strong>Full Name</strong></th>
            <th><strong>Birth Date</strong></th>
            <th><strong>Age</strong></th>
            
            <th><strong>Action</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count =1;
        $sel_query = "SELECT * FROM web2_tb ORDER BY username;";
        $result = mysqli_query($conn, $sel_query);
        while($row = mysqli_fetch_assoc($result)){?>
            <td align = "center"><?php echo $row["username"];?></td>
            <td align = "center"><?php echo $row["userpassword"];?></td>
            <td align = "center"><?php echo $row["usertype"];?></td>
            <td align = "center"><?php echo $row["fullname"];?></td>
            <td align = "center"><?php echo $row["birthdate"];?></td>
            <td align = "center"><?php echo $row["age"];?></td>
            
            <td align = "center">
               <button><a href="edit.php?username=<?php echo $row["username"];?>"style="text-decoration: none; color:black;">Edit</a></button> 
                <button><a href="delete.php?username=<?php echo $row["username"];?>" style="text-decoration: none; color:black;">Delete</a></button>
            </td>
            </tr>
            <?php $count++;
        }?>
    </tbody>
</table><br>

<button><a href="welcome.php" style="text-decoration: none; color:black;text-align:right;">Back</button>
</center>
</body>
</html>