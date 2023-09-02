<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    
    <title>Funda Of Web IT</title>
</head>
<body>

    <div class="container" style="padding: 30px 0px 0px 1100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                   
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="list.php" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" style="border-radius: 2px;" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data here...">
                                        <button type="submit"  class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <td><strong>User Name |</strong></td>
                                <td><strong>Full Name |</strong></td>
                                <td><strong>User Type |</strong></td>
                            </thead>
                            <tbody>
                                
                                <?php 
                                    $con = mysqli_connect("localhost","root","","web2");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM web2_tb WHERE CONCAT(username,fullname,usertype) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['username']; ?> </td>
                                                    <td><?= $items['fullname']; ?> </td>
                                                    
                                                    <td><?= $items['usertype']; ?></td>
                                                  
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found!</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>