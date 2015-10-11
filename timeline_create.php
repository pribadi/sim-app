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
                    <h1 class="page-header">Project / Timeline</h1>
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
                                    <form role="form" action="timeline_add.php" id="timeline" method="POST">
                                        <input type="hidden" name="id_project" value=<?php echo $_GET['id']; ?> class="form-control">
                                        <div class="form-group">
                                            <label>Timeline Name</label>
                                            <select name="timeline_name" class="form-control">
                                                <option>...</option>
                                                <option value="User Requirment">User Requirment</option>
                                                <option value="Application Design">Application Design</option>
                                                <option value="Installing Server">Installing Server</option>
                                                <option value="Development">Development</option>
                                                <option value="Implementation System">Implementation System</option>
                                                <option value="Testing">Testing</option>
                                                <option value="Training">Training</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Time</label>
                                            <input type="date" name="start_time" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <input type="date" name="end_time" class="form-control">
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
    <script type="text/javascript">
        $(function(){
            var start = $('input[type="date"][name="start_time"]');
            var end = $('input[type="date"][name="end_time"]');
            var form = $('form#timeline');
            // $(end).on("change", function(e){
            //     if(start.val() >= end.val()){
            //         alert("Tanggal Terbit must not be greater than the Tanggal Expired and Don't be Empty");
            //     }
            // });
            $( "form" ).submit(function( event ) {
              if(start.val() >= end.val()){
                    alert("Tanggal mulai must not be greater than the Tanggal Expired and Don't be Empty");
                    return false;
                }
            });
        });
    </script>



    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
