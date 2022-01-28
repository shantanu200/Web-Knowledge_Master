<?php

include 'db.php';

$name = $_SESSION['username'];

echo $name;

$score = $_POST['s'];
$correct = $_POST['c'];
$wrong = $_POST['i'];
$status = $_POST['t'];
$insert = mysqli_query($conn,"INSERT INTO scoredata(username,score,correct,wrong,status) VALUES('$name','$score','$correct','$wrong','$status')");

if($insert){
    echo "Sucess";
}else{
    echo "Error";
}



?>