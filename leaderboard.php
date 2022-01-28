

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.cdnfonts.com/css/code-new-roman" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/leaderboard.css">
    <title>ScoreBoard</title>
  </head>
  <body>
    <h1 class="heading">SCORE BOARD</h1>
    <div class="form_div">
    <form method="POST">
    <input type="text" name="name" placeholder="Enter Your exact Name">
    <button class="btn btn-success" type="submit" name="search"><i class="fab fa-searchengin"></i> SEARCH</button>
    </form>
    </div>
    <table class="table">
    <thead class="table-dark">
    <tr style="text-align: center;">
      <th>RANK</th>
      <th>NAME</th>
      <th>SCORE</th>
      <th>DATE</th>
      <th>TIME</th>
    </tr>
  </thead>
  <tbody class="tbody_div">
  <?php
include 'db.php';

// All variable declaration
$cnt = 0;
$rank = 0;
$score = 0;
$found = false;
$alert = false;
$class = null;
$sname = null;

if(isset($_POST['search'])){
  $sname = $_POST['name'];
}

$que = mysqli_query($conn,"SELECT * FROM scoredata ORDER BY score DESC");
$row = mysqli_num_rows($que);
while($row = mysqli_fetch_array($que)){
$cnt += 1;

if($sname == $row['username']){
  $found = true;
  $alert = true;
  $rank = $cnt;
  $score = $row['score'];
  if($found){
    $class = "table-success";
  }
}
?>
  <tr <?php if($found){
      $found = false;?>
      class="<?php echo $class;?>" 
  <?php }?>
  style="text-align: center;">
    <td><?php echo $cnt; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['score']; ?></td>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['Time']; ?></td>
  </tr>
<?php
}
$result = "Rank of ".$sname." is ".$rank."/".$cnt." with score of ".$score;
if($alert){
  $_SESSION['status'] = "Data found";
  $_SESSION['status_message'] = $result;
  $_SESSION['status_code'] = "success";
}else{
  $_SESSION['status'] = "Data not found";
  $_SESSION['status_message'] = "No such Data is available in database";
  $_SESSION['status_code'] = "error";
  
}
?>
</tbody>
</table>
<script src="js/sweet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php include 'sweet_alert_one.php';?>