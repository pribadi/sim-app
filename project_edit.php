<?php 
session_start(1);
 ?>
 
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

    $customer_query = mysql_query("SELECT * FROM customer");

    $query = mysql_query("SELECT p.*, c.customer_name
                        FROM project p
                        LEFT JOIN customer c ON p.id_customer = c.id_customer
                        WHERE p.id_project = $id");
    $data = mysql_fetch_array($query);
?>

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
                                    <form role="form" action="project_update.php" method="POST">
                                        <input type="hidden" name="id_project" value="<?php echo $id; ?>">
                                        <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">

                                        <div class="form-group">
                                            <label>Customer</label>
                                            <select name="id_customer" class="form-control">
                                            <?php while($customer = mysql_fetch_array($customer_query)): ?>
                                                <?php $selected = ""; ?>
                                                <?php if($data['customer_name'] == $customer['customer_name']) $selected = "selected"; ?>
                                                <option value="<?php echo $customer['id_customer'] ?>" <?php echo $selected;  ?>><?php echo $customer['customer_name'] ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" name="project_name" class="form-control" value="<?php echo $data['project_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Technology Platform</label>
                                            <select name="platform" class="form-control">
                                                <option <?php if($data['platform'] == 'Desktop') echo "selected"; ?> value="Desktop">Desktop</option>
                                                <option <?php if($data['platform'] == 'Mobile') echo "selected"; ?> value="Mobile">Mobile</option>
                                                <option <?php if($data['platform'] == 'Web') echo "selected"; ?> value="Web">Web</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Start Project</label>
                                            <input type="date" name="start" class="form-control" value="<?php echo $data['start']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>End Project</label>
                                            <input type="date" name="end" class="form-control" value="<?php echo $data['end']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>URL Demo</label>
                                            <input type="text" name="url_demo" class="form-control" value="<?php echo $data['url_demo']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="3"><?php echo $data['description']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Project</label>
                                            <select name="status_project" class="form-control">
                                                <option <?php if($data['status_project'] == 'Close') echo "selected"; ?> value="Close">Close</option>
                                                <option <?php if($data['status_project'] == 'Maintenance') echo "selected"; ?> value="Maintenance">Maintenance</option>
                                                <option <?php if($data['status_project'] == 'Open') echo "selected"; ?> value="Open">Open</option>
                                                <option <?php if($data['status_project'] == 'Supporting') echo "selected"; ?> value="Supporting">Supporting</option>
                                                <option <?php if($data['status_project'] == 'Waiting') echo "selected"; ?> value="Waiting">Waiting</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="project_detail.php?id=<?php echo $data['id_project']; ?>"><input type="button" class="btn btn-default" value="Back"></a>
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
