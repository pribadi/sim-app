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
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Task Name</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: CRUD User</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Description</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, recusandae in dignissimos laudantium cumque dolor ex nobis, quo deserunt nihil similique officiis consequatur obcaecati excepturi accusantium esse a reiciendis suscipit.</p>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Start Task</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: 1 - January - 2014</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>End Task</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: 20 - May - 2014</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Assign</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: Programmer A</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: On Progress</p>
                                        </div>
                                    </div>

                                    <a href="project_detail.php"><button class="btn btn-default">Back</button></a>
                                    <a href="task_update.php"><button class="btn btn-primary">Update</button></a>
                                    <a href="task_delete.php"><button class="btn btn-danger">Delete</button></a>

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
