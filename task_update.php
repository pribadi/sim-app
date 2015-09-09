 <?php
    include("connect.php");

    $id             = $_POST['id_task'];
    $id_project     = $_POST['id_project'];
    
    $id_participant     = $_POST['id_participant'];
    $task_name          = $_POST['task_name'];
    $task_description   = $_POST['task_description'];
    $start_task         = $_POST['start_task'];
    $end_task           = $_POST['end_task'];
    $status             = $_POST['status'];

    $query = mysql_query("UPDATE project_task SET id_participant='$id_participant', task_name='$task_name', task_description='$task_description', start_task='$start_task', end_task='$end_task', status='$status' WHERE id_task='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Task Project Successfully Updated');</script>";
        echo "<script>window.location = 'task_detail.php?id_task=$id&id_project=$id_project';</script>";
        // header('Location:list_position.php?message=success');
    }

?>