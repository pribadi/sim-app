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

    $position_query = mysql_query("SELECT * FROM position");

    $query = mysql_query("SELECT r.*, p.position_name
                        FROM roles r
                        LEFT JOIN position p ON r.id_position = p.id_position
                        WHERE id_roles=$id");
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
                    <h1 class="page-header">Roles</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Roles
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="roles_update.php" method="POST">
                                        <input type="hidden" name="id_roles" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label>Position</label>
                                            <select name="id_position" class="form-control">
                                                <?php while($position = mysql_fetch_array($position_query)): ?>
                                                    <?php $selected = ""; ?>
                                                    <?php if($data['position_name'] == $position['position_name']) $selected = "selected"; ?>
                                                    <option value="<?php echo $position['id_position'] ?>" <?php echo $selected;  ?>><?php echo $position['position_name'] ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>URI</label>
                                            <input type="text" name="uri" class="form-control" value="<?php echo $data['uri']; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="roles_list.php"><input type="button" class="btn btn-default" value="Back"></a>
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
