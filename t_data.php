<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/t_data.css">
    <link href="http://fonts.cdnfonts.com/css/code-new-roman" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>KM_Student Data</title>
  </head>
  <body>
    <h1 class="h_head">DATA  ANALYSER</h1>
    <!-- Button Code -->
    <div class="button">
    <button class="btn btn-primary"><i class="fab fa-searchengin"></i> Search</button>
    <button class="btn btn-success"><i class="fas fa-sort"></i> Order</button>
    <button class="btn btn-danger"><i class="fas fa-chart-line"></i> Graphs</button>
    </div>
    <!-- Search -->
    <!-- FORM -->
    <form method="POST" class="form_div">
    <input placeholder="Enter Score" name="score" required/>
    <button type="submit" class="btn btn-success" name="submit">Search</button>
    </form>
    
    <!-- ORDER -->
   <div class="order_button">
     <form method="POST">
     <button class="btn btn-success" type="submit" name="asc"><i class="fas fa-sort-numeric-up"></i> Ascending</button>
     <button class="btn btn-danger" type="submit" name="dsc"><i class="fas fa-sort-numeric-down"></i> Decending</button>
     </form>
   </div>

    <div class="graph_div">
      <form method="POST">
        <button class="btn btn-info" name="bar"><i class="fas fa-chart-bar"></i> Bar Chart</button>
        <button class="btn btn-warning" name="pie" type="submit"> <i class="fas fa-chart-pie"></i> Pie Chart</button>
      </form>
    </div>

<?php
if(isset($_POST['bar'])){
  header('Location:bar.php');
}

if(isset($_POST['pie'])){
  header('Location:pie.php');
}

?>

    <!-- Table Code -->
    <div class="table_div">
        <table class="table">
            <thead class="table-dark">
             <tr style="text-align: center;">
             <th>ID</th>
             <th>Name</th>
             <th>Score</th>
             <th>Date</th>
             <th>Time</th>
             </tr>
            </thead>
            <tbody style="text-align: center;">
             <tr>
<?php
include 'db.php';

if(isset($_POST['submit'])){
  $score = $_POST['score'];
  $select = mysqli_query($conn,"SELECT * FROM scoredata");
  $row = mysqli_num_rows($select);
  while($row = mysqli_fetch_array($select)){
  if($score<=$row['score']){
?>
   <td><?php echo $row['rank']; ?></td>
   <td><?php  echo $row['username']; ?></td>
   <td><?php  echo $row['score']; ?></td>
   <td><?php  echo $row['Date']; ?></td>
   <td><?php  echo $row['Time']; ?></td>
   </tr>
<?php
}
}
}
?>   
    
    </div>

<!-- ORDER ASCENDING-->
    <div class="order_table">
            <tbody >
             <tr>
<?php
if(isset($_POST['asc'])){
$asc = mysqli_query($conn,"SELECT * FROM scoredata ORDER BY score");
$row = mysqli_num_rows($asc);
while($row = mysqli_fetch_array($asc)){
?>
   <td><?php echo $row['rank']; ?></td>
   <td><?php  echo $row['username']; ?></td>
   <td><?php  echo $row['score']; ?></td>
   <td><?php  echo $row['Date']; ?></td>
   <td><?php  echo $row['Time']; ?></td>
   </tr>
<?php
}}
?>  
    </tbody>
    </div>

<!-- ORDER DESCENDING -->
<div class="order_dsc">
  <tbody>
  <tr>
<?php

if(isset($_POST['dsc'])){
  $dsc = mysqli_query($conn,"SELECT * FROM scoredata ORDER BY score DESC");
  $row = mysqli_num_rows($dsc);
  while($row = mysqli_fetch_array($dsc)){
?>
   <td><?php echo $row['rank']; ?></td>
   <td><?php  echo $row['username']; ?></td>
   <td><?php  echo $row['score']; ?></td>
   <td><?php  echo $row['Date']; ?></td>
   <td><?php  echo $row['Time']; ?></td>
   </tr>
<?php
}
}
?>  
    </tbody>
    </div>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>

