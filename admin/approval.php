<?php

include 'partials/_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if($_POST['type'] == "thread"){
    $id = $_POST['threadid'];
    $status = $_POST['status'];
    $sql = "UPDATE threads SET status= '$status' WHERE thread_id = $id";
    mysqli_query($conn, $sql);
    }

    if ($_POST['type'] == "comment") {
        $id = $_POST['commentid'];
        $status = $_POST['status'];
        $sql = "UPDATE comments SET status= '$status' WHERE comment_id = $id";
        mysqli_query($conn, $sql);  
    }
}

header("location: /forum/adminpanel.php");

?>