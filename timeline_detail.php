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

    $id = $_GET['id_timeline'];
    $id_project = $_GET['id_project'];

    $query_timeline = mysql_query("SELECT * FROM project_timeline WHERE id_timeline = $id");
 ?>

<body>

    <div id="wrapper">

        <!-- start navbar -->
        <?php include('navbar.php') ?>
        <!-- end navbar -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project / Timeline</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail Timeline
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php while($timeline = mysql_fetch_array($query_timeline)): ?>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Timeline Name</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo $timeline['timeline_name']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Start Time</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo date('d-m-Y',strtotime($timeline['start_time'])); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>End Time</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo date('d-m-Y',strtotime($timeline['end_time'])); ?></p>
                                        </div>
                                    </div>
                                    <a href="project_detail.php?id=<?php echo $id_project; ?>"><button class="btn btn-default">Back</button></a>
                                    <a href="timeline_edit.php?id=<?php echo $timeline['id_timeline']; ?>&id_project=<?php echo $id_project; ?>"><button class="btn btn-primary">Update</button></a>
                                    <a href="timeline_delete.php?id_timeline=<?php echo $id; ?>"><button class="btn btn-danger">Delete</button></a>
                                </div>
                                <?php endwhile ?>
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
