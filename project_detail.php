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

    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<?php
    include ("connect.php");

    $id = $_GET['id'];

    // query detail project
    $query = mysql_query("SELECT p.*, c.customer_name, sp.name_status_project
                        FROM project p
                        LEFT JOIN customer c ON p.id_customer = c.id_customer
                        LEFT JOIN status_project sp ON p.id_status_project = sp.id_status_project
                        WHERE p.id_project = $id");
    $data = mysql_fetch_array($query);

    // progress chart
    $total_task = mysql_query("SELECT * FROM task_project WHERE id_project = $id");
    $total = mysql_num_rows($total_task);


    $done_task = mysql_query("SELECT * FROM task_project WHERE id_project = $id AND status = 'done'");
    $done = mysql_num_rows($done_task);

    if ($done == 0) {
        $progres = 0;
        $rest = 0;
    } else {
        $progres = ($done/$total)*100;
        $rest = 100 - $progres;
    }

    // total hari
    $datetime = date_create(date('Y-m-d h:i:s'));

    $start = date_create($data['start']);
    $end = date_create($data['end']);

    $daydiff = date_diff($start, $end);
    $totalday = $daydiff->format('%a')+1;

    $progresdiff = date_diff($start, $datetime);
    $totalprogres = $progresdiff->format('%a')+1;

    $restdiff = date_diff($datetime, $end);
    $totalrest = $restdiff->format('%a')+1;

    $line = ($totalprogres/$totalday)*100;


?>

<body>

    <div id="wrapper">

        <!-- start navbar -->
        <?php include('navbar.php') ?>
        <!-- end navbar -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project / <?php echo $data['project_name']; ?></h1>
                </div>
            </div>

            <!-- Line Chart Project -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart Project
                        </div>

                        <div class="panel-body">
                            <div>
                                <p>
                                    <strong>Progress Project</strong>
                                    <span class="pull-right text-muted"><?php echo $rest; ?>% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progres . "%"; ?>">
                                        <span class="pull-right text-muted"><?php echo $progres; ?>% Complete (success)</span>
                                    </div>
                                </div>
                            </div>

                            <?php if ($datetime > $end): ?>
                                <div>
                                    <p>
                                        <strong>Deadline</strong>
                                        <span class="pull-right text-muted">0 Days Again</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            <span class="pull-right text-muted">Done Days </span>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div>
                                    <p>
                                        <strong>Deadline</strong>
                                        <span class="pull-right text-muted"><?php echo $totalrest; ?> Days Again</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $line . "%"; ?>">
                                            <span class="pull-right text-muted"><?php echo $totalprogres;?> Days </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail Project -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail Project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Project Name</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>: <?php echo $data['project_name']; ?></p>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="project_edit.php?id=<?php echo $data['id_project']; ?>" style="float: right;"><button class="btn btn-primary">Update</button></a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Customer</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <p>: <?php echo $data['customer_name']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Start Project</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <p>: <?php echo date('d-m-Y',strtotime($data['start'])); ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>End Project</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <p>: <?php echo date('d-m-Y',strtotime($data['end'])); ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Description</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <p>: <?php echo $data['description']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Value Project</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <p>: <?php echo $data['value_project']; ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Status Project</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <p>: <?php echo $data['name_status_project']; ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Crew Project -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Crew Project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <?php
                                        $query_propos = mysql_query("SELECT c.*, p.id_project, u.fullname, pp.name
                                            FROM crew_project c
                                            LEFT JOIN project p ON c.id_project = p.id_project
                                            LEFT JOIN user u ON c.id_user = u.id_user
                                            LEFT JOIN project_position pp ON c.id_propos = pp.id_propos
                                            WHERE p.id_project = $id");
                                     ?>

                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Crew Name</th>
                                                <th>Project Position</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($cp = mysql_fetch_array($query_propos)): ?>
                                            <tr>
                                                <td><?php echo $cp['fullname']; ?></td>
                                                <td><?php echo $cp['name']; ?></td>
                                                <td>
                                                    <a href="crew_delete.php?id=<?php echo $cp['id_crew']; ?>"><i class="fa fa-times"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <?php endwhile ?>
                                        </tbody>
                                    </table>

                                    <?php
                                        $propos_query = mysql_query("SELECT * FROM project_position");
                                        $user_query = mysql_query("SELECT * FROM user");
                                    ?>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" action="crew_add.php" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Crew Name</label>
                                                            <select name="id_user" class="form-control">
                                                                <option value="">...</option>
                                                                <?php while($user = mysql_fetch_array($user_query)): ?>
                                                                    <option value="<?php echo $user['id_user'] ?>"><?php echo $user['fullname'] ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="id_project" value="<?php echo $data['id_project']; ?>">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Project Position</label>
                                                            <select name="id_propos" class="form-control">
                                                                <option value="">...</option>
                                                                <?php while($propos = mysql_fetch_array($propos_query)): ?>
                                                                    <option value="<?php echo $propos['id_propos'] ?>"><?php echo $propos['name'] ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Task Project -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Task Project</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

                                <a href="task_create.php?id=<?php echo $_GET['id']; ?>"><button class="btn btn-primary">Add Task</button></a><br><br>

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Task Name</th>
                                            <th>Assign</th>
                                            <th>Start Task</th>
                                            <th>End Task</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $query_task = mysql_query("SELECT t.*,c.*,u.fullname
                                            FROM task_project t
                                            LEFT JOIN crew_project c ON t.id_crew = c.id_crew
                                            LEFT JOIN user u ON c.id_user = u.id_user
                                            WHERE t.id_project = $id
                                            ");
                                     ?>
                                    <tbody>
                                        <?php $no=1; ?>
                                        <?php while($task = mysql_fetch_array($query_task)): ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><a href="task_detail.php?id_task=<?php echo $task['id_task']; ?>"><?php echo $task['task_name']; ?></a></td>
                                            <td><?php echo $task['fullname']; ?></td>
                                            <td><p><?php echo date('d-m-Y',strtotime($task['start_task'])); ?></p></td>
                                            <td><p><?php echo date('d-m-Y',strtotime($task['end_task'])); ?></p></td>
                                            <td><?php echo $task['status']; ?></td>
                                        </tr>
                                        <?php endwhile ?>

                                    </tbody>
                                </table>

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

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
