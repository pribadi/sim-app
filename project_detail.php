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

<body>

    <div id="wrapper">

        <!-- start navbar -->
        <?php include('navbar.php') ?>
        <!-- end navbar -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project</h1>
                </div>
            </div>

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
                                        <div class="col-lg-6">
                                            <p>Aplikasi Perpustakaan</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Customer</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>PT. Sagara Xinix Solusitama</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Start Project</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>1 - January - 2014</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>End Project</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>20 - May - 2014</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Project Manager</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>Wahyu Pribadi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart Project
                        </div>

                        <div class="panel-body">
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Progress Project</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Deadline</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>

                </div>
            </div>

                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">List Project</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Customer</th>
                                            <th>Start Project</th>
                                            <th>End Project</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="project_detail.php">Aplikasi Perpustakaan</a></td>
                                            <td>PT. Sagara Xinix Solusitama</td>
                                            <td>1 - January - 2014</td>
                                            <td>20 - Mey - 2014</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="project_detail.php">Aplikasi Perpustakaan</a></td>
                                            <td>PT. Sagara Xinix Solusitama</td>
                                            <td>1 - January - 2014</td>
                                            <td>20 - Mey - 2014</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="project_detail.php">Aplikasi Perpustakaan</a></td>
                                            <td>PT. Sagara Xinix Solusitama</td>
                                            <td>1 - January - 2014</td>
                                            <td>20 - Mey - 2014</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="project_detail.php">Aplikasi Perpustakaan</a></td>
                                            <td>PT. Sagara Xinix Solusitama</td>
                                            <td>1 - January - 2014</td>
                                            <td>20 - Mey - 2014</td>
                                        </tr>
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

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
