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
?>

<body>

    <div id="wrapper">

        <!-- start navbar -->
        <?php include('navbar.php') ?>
        <!-- end navbar -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="user_add.php" method="POST">
                                        <div class="form-group">
                                            <label>Employee Number</label>
                                            <input type="text" name="employee_number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fullname</label>
                                            <input type="text" name="fullname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Place Birth</label>
                                            <input type="text" name="place" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Date Birth</label>
                                            <input type="date" name="date_birth" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status</label>
                                            <select name="status" class="form-control">
                                                <option>...</option>
                                                <option value="Married">Married </option>
                                                <option value="Not Married">Not Married </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sex</label>
                                            <select name="sex" class="form-control">
                                                <option>...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Religion</label>
                                            <select name="religion" class="form-control">
                                                <option>...</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Konghucu">Konghucu</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <select name="position" class="form-control">
                                                <option>...</option>
                                                <option value="CEO">CEO</option>
                                                <option value="CIO">CIO</option>
                                                <option value="COO">COO</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Project Manager">Project Manager</option>
                                                <option value="Project Member">Project Member</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input name="phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea name="address" class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </form>
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
