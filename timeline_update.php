 <?php
    include("connect.php");

    $id             = $_POST['id_timeline'];
    $id_project     = $_POST['id_project'];
    
    $timeline_name  = $_POST['timeline_name'];
    $start_time     = $_POST['start_time'];
    $end_time       = $_POST['end_time'];

    $query = mysql_query("UPDATE project_timeline SET timeline_name='$timeline_name', start_time='$start_time', end_time='$end_time' WHERE id_timeline='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Task Project Successfully Updated');</script>";
        echo "<script>window.location = 'project_detail.php?id=$id_project';</script>";
        // header('Location:list_position.php?message=success');
    }
?>