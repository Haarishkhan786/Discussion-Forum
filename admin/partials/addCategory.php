<?php

session_start();
include './_dbconnect.php';

if ($_GET['op'] == "add") {
if ($_SESSION['role'] == 'Admin') {
    $title = $_POST['title'];
    $desc = $_POST['desc'];

    $sql = "Insert into category (`category_name`,`category_description`) VALUES ('$title', '$desc')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $alert = "Successfully added category !!!!";
        header("location: /forum/admin/category_management.php?alert=$alert");
    }
    else{
        $alert = "Unable to process the request !!!!";
        header("location: /forum/admin/category_management.php?error=$alert");
    }

}
}


if ($_GET['op'] == "remove") {
   $idtobedeleted = $_GET['catid'];

   $sql = "Delete from category where category_id = $idtobedeleted";
   $result = mysqli_query($conn, $sql);

   if ($result) {
       $alert = "Category removed successfully !!!";
       header("location: /forum/admin/category_management.php?alert=$alert");
   }
   else{
       $alert = "Unable to process the request !!!!";
       header("location: /forum/admin/category_management.php?error=$alert");
   }

}






?>