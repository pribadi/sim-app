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

$crew_query = mysql_query("SELECT c.*,u.fullname
        FROM crew_project c
        LEFT JOIN user u ON c.id_user = u.id_user
    ");

$query_task = mysql_query("SELECT t.*,c.*,u.fullname
        FROM task_project t
        LEFT JOIN crew_project c ON t.id_crew = c.id_crew
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
                            Update Task
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php while($task = mysql_fetch_array($query_task)): ?>

                                    <form role="form" action="task_update.php" method="POST">
                                        <input type="hidden" name="id_task" value="<?php echo $task['id_task']; ?>">
                                        <div class="form-group">
                                            <label>Task Name</label>
                                            <input type="text" name="task_name" class="form-control" value="<?php echo $task['task_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="3"><?php echo $task['description']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Task</label>
                                            <input type="date" name="start_task" class="form-control" value="<?php echo $task['start_task']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>End Task</label>
                                            <input type="date" name="end_task" class="form-control" value="<?php echo $task['end_task']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Assign</label>
                                            <select name="id_crew" class="form-control">
                                            <?php while($crew = mysql_fetch_array($crew_query)): ?>
                                                <?php $selected = ""; ?>
                                                <?php if($task['id_crew'] == $crew['id_crew']) $selected = "selected"; ?>
                                                <option value="<?php echo $crew['id_crew']; ?>" <?php echo $selected; ?>><?php echo $crew['fullname']; ?></option>
                                            <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option <?php if($task['status'] == 'pending') echo "selected"; ?> value="pending">Pending</option>
                                                <option <?php if($task['status'] == 'progress') echo "selected"; ?> value="progress">On Progress</option>
                                                <option <?php if($task['status'] == 'done') echo "selected"; ?> value="done">Done</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="task_detail.php?id_task=<?php echo $id; ?>"><input type="button" class="btn btn-default" value="Back"></a>
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
