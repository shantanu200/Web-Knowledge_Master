<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/t_studentdata.css" />
  <link href="http://fonts.cdnfonts.com/css/code-new-roman" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>STUDENT DATA</title>
</head>

<body>
<h1 class="heading">STUDENT DATA</h1>
  <div class="bg-modal" id="form" style="display: none">
    <div class="modal-contents">
      <div class="close">+</div>
      <h3>ADD DATA</h3>
      <div class="form_div">
        <form method="POST">
          <input type="text" name="sname" placeholder="Enter Student Name" required>
          <input type="text" name="score" placeholder="Enter Score" required><br>
          <button type="submit" name="insert" class="btn btn-success"><i class="fas fa-user-plus"></i> INSERT</button>
        </form>
      </div>
    </div>
  </div>

  <div class="h_buttons">
    <button class="btn btn-danger" id="button">
      <i class="fas fa-user-plus"></i> ADD
    </button>
    <button class="btn btn-success" onclick="search()">
      <i class="fas fa-search"></i> SEARCH
    </button>
  </div>
  <table class="table" style="margin-top: 0.5rem;">
    <thead class="table-dark" style="text-align: center;">
      <tr>
      <th>RANK</th>
      <th>STUDENT</th>
      <th>SCORE</th>
      <th>CORRECT</th>
      <th>WRONG</th>
      <th>DATE</th>
      <th>TIME</th>
      <th>ACTION</th>
      </tr>
    </thead>
    <tbody style="text-align: center; font-family:'Code New Roman';">
<?php

$fetch = mysqli_query($conn,"SELECT * FROM scoredata ORDER BY score DESC");

$row = mysqli_num_rows($fetch);
$count = 0;
while($row = mysqli_fetch_array($fetch)){
$count += 1;
?>
 <tr>
   <td><?php echo $row['rank']; ?></td>
   <td><?php echo $row['username']; ?></td>
   <td><?php echo $row['score']; ?></td>
   <td><?php echo $row['correct']; ?></td>
   <td><?php echo $row['wrong']; ?></td>
   <td><?php echo $row['Date']; ?></td>
   <td><?php echo $row['Time']; ?></td>
   <td><button class="btn btn-primary btn-sm" onclick="update(<?php echo $row['rank']; ?>)" style="background: #c31432; background: -webkit-linear-gradient(to right, #240b36, #c31432); background: linear-gradient(to right, #240b36, #c31432);"><a style="text-decoration: none; color: #fff;  font-size:15px;"><i class="fas fa-user-edit"></i> UPDATE</a></button></td>
 
<?php
}
?>
     </tr>
    </tbody>
  </table>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/sweet.js"></script>
  <script src="js/t_studentdata.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['insert'])) {
  $sname = $_POST['sname'];
  $score = $_POST['score'];

  $correct = $score / 4;
  $wrong = 25 - $correct;
  $status = "YES(ADDED)";

  $sql = mysqli_query($conn, "INSERT INTO scoredata(username,score,correct,wrong,status) VALUES('$sname','$score','$correct','$wrong','$status')");
}

?>

<?php include 'sweet_alert_one.php';  ?>
<?php include 'sweet_alert_two.php';  ?>