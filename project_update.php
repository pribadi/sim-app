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
                    <h1 class="page-header">Project</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="user_action.php" method="POST">
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" name="employee" class="form-control" value="ini value">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="address" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Project</label>
                                            <input type="date" name="date_birth" class="form-control" value="ini value">
                                        </div>
                                        <div class="form-group">
                                            <label>End Project</label>
                                            <input type="date" name="date_birth" class="form-control" value="ini value">
                                        </div>
                                        <div class="form-group">
                                            <label>Customer</label>
                                            <select name="status" class="form-control">
                                                <option>...</option>
                                                <option value="">PT. Option 1 </option>
                                                <option value="">PT. Option 2 </option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
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
