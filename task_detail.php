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

    $id = $_GET['id_task'];
    $id_project = $_GET['id_project'];

    $query_task = mysql_query("SELECT t.*,c.*,u.fullname
        FROM project_task t
        LEFT JOIN project_participant c ON t.id_participant = c.id_participant
        LEFT JOIN user u ON c.id_user = u.id_user
        WHERE t.id_task = $id
        ");
 ?>

<body>

    <div id="wrapper">

        <!-- start navbar -->
        <?php include('navbar.php') ?>
        <!-- end navbar -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project / Task</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail Task
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php while($task = mysql_fetch_array($query_task)): ?>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Assign</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo $task['fullname']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Task Name</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo $task['task_name']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Description</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo $task['task_description']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Start Task</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo date('d-m-Y',strtotime($task['start_task'])); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>End Task</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo date('d-m-Y',strtotime($task['end_task'])); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: <?php echo $task['status']; ?></p>
                                        </div>
                                    </div>
                                    <a href="project_detail.php?id=<?php echo $id_project; ?>"><button class="btn btn-default">Back</button></a>
                                    <a href="task_edit.php?id=<?php echo $task['id_task']; ?>&id_project=<?php echo $id_project; ?>"><button class="btn btn-primary">Update</button></a>
                                    <a href="task_delete.php?id_task=<?php echo $id; ?>"><button class="btn btn-danger">Delete</button></a>
                                </div>
                                <?php endwhile ?>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="task_add.php" method="POST">
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <textarea name="comment" class="form-control" rows="3"></textarea>
                                        </div>
                                        <button style="float: right;" type="submit" class="btn btn-primary">Post</button>

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
