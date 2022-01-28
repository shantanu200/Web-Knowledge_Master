<?php

include 'db.php';
include 'testmail.php';

if(isset($_POST['send'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['message'];

    $sql = mysqli_query($conn,"INSERT INTO contactdata(username,email,phone,message) VALUES('$username','$email','$phone','$msg')");

    if($sql){
        $sub = "Thank-You";
        $msg = "Your valuable review is added to system.We will definetly working on your suggestion.";
        sendmail($email,$sub,$msg);

        $_SESSION['status'] = "Thank-You";
        $_SESSION['status_message'] = "Review is added and send to team";
        $_SESSION['status_code'] = "success";

        header("Location:contact.php");
    }else{
        $_SESSION['status'] = "Sorry";
        $_SESSION['status_message'] = "Sorry!! Review is not added";
        $_SESSION['status_code'] = "error";

        header("Location:contact.php");
    }
}



?>