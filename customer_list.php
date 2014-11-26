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
                    <h1 class="page-header">Customer</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">List Customer</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td><a href="customer_detail.php">BUT CONOCOPHILLIPS INDONESIA INC. L</a></td>
                                            <td>089812345678</td>
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
