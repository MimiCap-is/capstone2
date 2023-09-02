<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Msg</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body{
            background-image: url('best1.gif');
            position: relative;
            background-size:cover;
        }
    </style>
</head>
<body>
    <div style="padding:50px;">
    <form style="background-color: pink; padding-top:30px;">
    <CENTER><h1 style="padding: 30px 20px; color:whitesmoke;">HELLO World!</</h1></CENTER>
    <center>
        <?php
            if ($_SESSION["usertype"] == "Admin"){
                echo "<button type = 'submit'><a href='register1.php' style='text-decoration: none; color:azure;'>Register</a></button>";
            }
            else{
                echo "<button type = 'submit'><a href='register1.php' style='text-decoration: none; color:azure;'disabled = 'disabled'>Register</a></button>";
                
            }
        ?>
        <button type = 'submit'><a href='list.php' style='text-decoration: none; color:azure;'>View Users</a></button>
    </center>

            
    </form>
    </div>

    

</body>
</html>
