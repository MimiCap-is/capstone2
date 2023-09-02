<?php
include("conn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
    <link rel="stylesheet" href="design.css">
</head>
<body> 
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex" method="POST" action="list.php">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
                <button class="btn btn-primary" type="submit" name="search">Search</button>
            </form>
        </div>
    </nav>
    <br>

    <?php
        if(isset($_POST['search'])){
            $keyword = $_POST['keyword'];
        ?>
        <div>
            <h2> Result</h2>
            <hr style="border-top:2px dotted #acc;"/>
            <?php
                require 'conn.php';
                $query = mysqli_query($conn, "SELECT * FROM user_tb WHERE Username LIKE '%$keyword%' ORDER BY Username") or die(mysqli_error());
                while($row = mysqli_fetch_array($query)){
            ?>
            <div style="word-wrap:break-word;">
            
                <tr>
                    <td><?php echo $row['Username'];?></td>
                    <td><?php echo $row['Password'];?></td>
                    <td><?php echo $row['usertype'];?></td>
                    <td><?php echo $row['comname'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td>
                    <button type="button" class="btn btn-outline-success" onclick="alert('Are you sure you want to edit it?')"; ><a href="edit.php?Username=<?php echo$row['Username']; ?>">Edit</a></button>
                    <button type="button" class="btn btn-outline-danger" onclick="alert('Are you sure you want to delete it?')"; ><a href="delete.php?Username=<?php echo$row['Username']; ?>">Delete</a></button>
                    </td>
                </tr>
            </div>
            <hr style="border-buttom:1px"/>
            <?php
                }
            ?>
        </div>
        
        <?php
            }else{
                echo "no result found";
            }
        ?>
        </center>
    </div>

    <center>
    <div class="form">
    <button><a href="welcome.php" style="text-decoration: none; color:blue;">Back</button>
    <table width="50%" style="border-collapse:collapse; color:blue;" border="2">
    <thead>
    <tr>
    <th><strong>User Name</strong></th>
    <th><strong>User Type</strong></th>
    <th><strong>Complete Name</strong></th>
    <th><strong>Password</strong></th>
    <th><strong>Age</strong></th>
    <th><strong>Action</strong></th>

    </tr>
    </thead>

    <tbody>
    <?php
    $count=1;
    $sel_query="Select * from user_tb ORDER by Username;";
    $result = mysqli_query($conn,$sel_query);
    while($row = mysqli_fetch_assoc($result)) { ?>
    <td align="center"><?php echo $row["Username"]; ?></td>
    <td align="center"><?php echo $row["usertype"]; ?></td>
    <td align="center"><?php echo $row["comname"]; ?></td>
    <td align="center"><?php echo $row["Password"]; ?></td>
    <td align="center"><?php echo $row["age"]; ?></td>
    <td align="center">
    <a href="edit.php?Username=<?php echo $row["Username"]; ?>">Edit</a>
    <a href="delete.php?Username=<?php echo $row["Username"]; ?>">Delete</a>
    </td>
    </tr>
    <?php $count++; } ?>
    </tbody>
    </table>
    </center>
    </div>
    </body>
    </html>