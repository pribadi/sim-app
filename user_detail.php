<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIM - App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/plugins/timeline.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<?php
    include ("connect.php");

    $id = $_GET['id'];

    $query = mysql_query("SELECT u.*, p.name
                        FROM user u
                        LEFT JOIN position p ON u.id_position = p.id_position
                        WHERE id_user='$id'");

    $data = mysql_fetch_array($query);
?>

<body>

    <div id="wrapper">

        <?php include('navbar.php') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Employee Number</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['employee_number']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Fullname</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['fullname']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['email']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Place Birth</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['place']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Date Birth</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['date_birth']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Marital Status</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['status']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Sex</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['sex']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Religion</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['religion']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Position</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['name']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['phone']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo $data['address']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Salary</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>Rp <?php echo $data['salary']; ?></p>
                                        </div>
                                    </div>

                                    <a href="user_list.php"><button class="btn btn-default">Back</button></a>
                                    <a href="user_edit.php?id=<?php echo $data['id_user']; ?>"><button class="btn btn-primary">Update</button></a>
                                    <a href="user_delete.php?id=<?php echo $data['id_user']; ?>"><button class="btn btn-danger">Delete</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
