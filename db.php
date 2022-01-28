<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "knowledge_master";

$conn = new mysqli($host,$user,$pass,$dbname);

if($conn->connect_error){
    die("Error: ".$conn->connect_error);
}

session_start();

?>
