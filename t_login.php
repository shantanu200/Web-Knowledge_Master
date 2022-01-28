<?php
include 'db.php';
include 'testmail.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $email = $_POST['email'];
    
    $login = false;
    $search = mysqli_query($conn,"SELECT * FROM teacherdata WHERE email='$email'");
    $row = mysqli_num_rows($search);

    if($row==1){
        $login = true;
    }else{
        $login = false;
    }
    if($login){
        $sub = "Login Sucessful!!";
        $msg = nl2br("Welcome Back!! To Knowledge Master");   
        $from = "From: Knowledge Master Team";
        
        sendmail($email,$sub,$msg);
        $_SESSION['status'] = "Login Success";
        $_SESSION['status_code'] = "success";
        header("Location:t_studentdata.php");
    }else{
        $_SESSION['status'] = "Invalid User";
        $_SESSION['status_code'] = "error";
        header("Location:teacher_login.php");
    }
}


?>