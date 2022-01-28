<?php
include 'db.php';

$sql ="SELECT * FROM scoredata";
$result = mysqli_query($conn,$sql);
$chart_data="";
while ($row = mysqli_fetch_array($result)) { 
    $username[]  = $row['username']  ;
    $score[] = $row['score'];
}

echo json_encode($username);

?>