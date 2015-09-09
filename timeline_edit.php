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
                            Update Timeline
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php while($timeline = mysql_fetch_array($query_timeline)): ?>

                                    <form role="form" action="timeline_update.php" method="POST">
                                        <input type="hidden" name="id_timeline" value="<?php echo $timeline['id_timeline']; ?>">
                                        <input type="hidden" name="id_project" value="<?php echo $id_project; ?>">
                                        <div class="form-group">
                                            <label>Timeline Name</label>
                                            <select name="timeline_name" class="form-control">
                                                <option <?php if($timeline['timeline_name'] == 'User Requirment') echo "selected"; ?> value="User Requirment">User Requirment</option>
                                                <option <?php if($timeline['timeline_name'] == 'Application Design') echo "selected"; ?> value="Application Design">Application Design</option>
                                                <option <?php if($timeline['timeline_name'] == 'Installing Server') echo "selected"; ?> value="Installing Server">Installing Server</option>
                                                <option <?php if($timeline['timeline_name'] == 'Development') echo "selected"; ?> value="Development">Development</option>
                                                <option <?php if($timeline['timeline_name'] == 'Implementation System') echo "selected"; ?> value="Implementation System">Implementation System</option>
                                                <option <?php if($timeline['timeline_name'] == 'Testing') echo "selected"; ?> value="Testing">Testing</option>
                                                <option <?php if($timeline['timeline_name'] == 'Training') echo "selected"; ?> value="Training">Training</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Time</label>
                                            <input type="date" name="start_time" class="form-control" value="<?php echo $timeline['start_time']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <input type="date" name="end_time" class="form-control" value="<?php echo $timeline['end_time']; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="project_detail.php?id=<?php echo $id_project; ?>"><button class="btn btn-default">Back</button></a>
                                    </form>
                                    <?php endwhile ?>
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
