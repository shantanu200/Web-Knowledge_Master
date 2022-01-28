<?php
include 'db.php';

$id = $_POST['gid'];
$ns = $_POST['nscore'];

$update = mysqli_query($conn,"UPDATE scoredata SET score='$ns' WHERE rank='$id'");

if($update){
    echo 'Mission done';
}else{
    echo 'Mission Unsuccess';
}

?>