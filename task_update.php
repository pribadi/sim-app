 <?php
    include("connect.php");

    $id = $_POST['id_task'];

    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $start_task = $_POST['start_task'];
    $end_task = $_POST['end_task'];
    $id_crew = $_POST['id_crew'];
    $status = $_POST['status'];

    $query = mysql_query("UPDATE task_project SET task_name='$task_name', description='$description', start_task='$start_task', end_task='$end_task', id_crew='$id_crew', status='$status' WHERE id_task='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Task Project Successfully Updated');</script>";
        echo "<script>window.location = 'task_detail.php?id_task=$id';</script>";
        // header('Location:list_position.php?message=success');
    }

?>