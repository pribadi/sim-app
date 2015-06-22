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
                            Create Task
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="task_add.php" method="POST">
                                        <input type="hidden" name="id_project" value=<?php echo $_GET['id']; ?> class="form-control">
                                        <div class="form-group">
                                            <label>Task Name</label>
                                            <input type="text" name="task_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Task</label>
                                            <input type="date" name="start_task" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>End Task</label>
                                            <input type="date" name="end_task" class="form-control">
                                        </div>

                                        <?php
                                            $query_crew = mysql_query("SELECT c.*, p.*, u.fullname
                                                FROM crew_project c
                                                LEFT JOIN project p ON c.id_project = p.id_project
                                                INNER JOIN user u ON c.id_user = u.id_user
                                                WHERE p.id_project = $id");
                                        ?>

                                        <div class="form-group">
                                            <label>Assign</label>
                                            <select name="id_crew" class="form-control">
                                                <option value="">...</option>
                                                <?php while($crew = mysql_fetch_array($query_crew)): ?>
                                                    <option value="<?php echo $crew['id_crew'] ?>"><?php echo $crew['fullname'] ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option>...</option>
                                                <option value="pending">Pending </option>
                                                <option value="progress">On Progress </option>
                                                <option value="done">Done </option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="project_detail.php?id=<?php echo $id; ?>"><input type="button" class="btn btn-default" value="Back"></a>
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
