<?php

include 'db.php';

function sendmail($email,$sub,$msg){
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "knwldgmaster@gmail.com";
    $to = $email;
    $subject = $sub;
    $message = $msg;
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
       return true;
    } else {
        return false;
    }
}
?>