<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico"/>
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

    <script src="js/jquery-1.11.0.js"></script>
    <script src="highcharts/js/highcharts.js"></script>
</head>

<?php 
    include ("connect.php");

    mysql_select_db("sim");
    $query = mysql_query("SELECT * FROM user");
    
?>

<body>

    <div id="wrapper">

        <!-- start navbar -->
        <?php include('navbar.php') ?>
        <!-- end navbar -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <a href="#"><button class="btn btn-primary">Charts</button></a>
                    <a href="report_participant_list.php"><button class="btn btn-default">List</button></a>

                </div>
            </div>

            <div class="row">
                <div id="container" style="width:100%; height:400px;"></div>
                <!-- <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div> -->
            </div>
        </div>


    </div>

    <script>
        $(function () {
            $('#container').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Report Project Participant'
                },
                subtitle: {
                    text: 'PT. Sagara Xinix Solusitama'
                },
                xAxis: {
                    categories: ['Nama 1', 'Nama 2', 'Nama 3', 'Nama 4', 'Nama 5']
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total fruit consumption'
                    }
                },
                legend: {
                    reversed: true
                },
                plotOptions: {
                    series: {
                        stacking: 'normal'
                    }
                },
                series: [{
                    name: 'Project Manager',
                    data: [5, 3, 4, 7, 2]
                }, {
                    name: 'Tester',
                    data: [2, 2, 3, 2, 1]
                }, {
                    name: 'Developer',
                    data: [2, 2, 3, 2, 1]
                }, {
                    name: 'Documentation',
                    data: [3, 4, 4, 2, 5]
                }]
            });
        });
    </script>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
