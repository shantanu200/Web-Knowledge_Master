<?php
include 'db.php';

$sql = mysqli_query($conn,"SELECT * FROM scoredata ORDER BY score DESC");
$row = mysqli_num_rows($sql);

while($row = mysqli_fetch_array($sql)){
  $username[] = $row['username'];
  $score[] = $row['score'];
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bar.css">
    <title>Bar Chart</title>
  </head>
  <body>
    <h1>STUDENT vs SCORE</h1>
    <h3>BAR CHART</h3>
    <div class="char_bar">
      <canvas id="chartjs_bar"></canvas>
    </div>
  </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="text/javascript">

    
    var ctx = document.getElementById("chartjs_bar").getContext("2d");

    // CHART PLOTTING
    var color = ["#5969ff","#ff407b","#25d5f2","#ffc750","#2ec551","#7040fa","#ff004e","#5969ff","#ff407b","#25d5f2","#5969ff","#ff407b","#25d5f2","#ffc750","#2ec551","#7040fa","#ff004e","#5969ff","#ff407b","#25d5f2"];
    var mychart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels:<?php echo json_encode($username); ?>,
          datasets: [
            {
              backgroundColor:color,
              data:<?php echo json_encode($score); ?>
            }
          ]
        },
        options:{
          responsive:true,
                plugins:{
                    legend:{
                        labels:{
                            font:{
                                size:16
                            }
                        }
                    }
                }
        }
  });

  </script>
</html>
