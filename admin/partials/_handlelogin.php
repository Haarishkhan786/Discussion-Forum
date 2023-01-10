<?php
include '_dbconnect.php';
$loggedin = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['uemail'];
  $email = str_replace( "<" , "&lt", $email  );
  $email = str_replace( ">" , "&gt", $email  );
  $password = $_POST['upassword'];
  $password = str_replace( "<" , "&lt", $password  );
  $password = str_replace( ">" , "&gt", $password  );
  $sql = "Select * from `users` where email = '$email'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password']) && $row['status'] == 'Active') {
      session_start();
      $_SESSION['loggedin'] = "true";
      $_SESSION['username'] = $row['username'];
      $_SESSION['useremail'] = $row['email'];
      $_SESSION['id'] = $row['user_id'];
      $_SESSION['role'] = $row['role'];
    //   if($row['role'] == 'Admin'){
    //     define('Admin',true);
    //     print_r($_SESSION);
    //     // header("location: /forum/admin/adminpanel.php");
    //   }
    //   else{
        define("User",true);
        // print_r($_SESSION);
        header("location: /forum");
        exit;
    //   }
    }
    else{
      $error = "Your Account is not active !!!! Please contact administrator !!!!";
      header("location: /forum?error=$error");
    }
  } 
  else{
      $error = "Your Account is not active !!!! Please contact administrator !!!!";
      header("location: /forum?error=$error");
    }
}

?>
