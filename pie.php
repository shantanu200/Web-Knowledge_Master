<?php

include 'db.php';

$sql = mysqli_query($conn,"SELECT * FROM scoredata");
$row = mysqli_num_rows($sql);

$sc_100 = 0;
$sc_80 = 0;
$sc_60 = 0;
$sc_40 = 0;
$sc_20 = 0;


while($row = mysqli_fetch_array($sql)){
    if((int)$row['score']<=20){
        $sc_20++;
    }
    if((int)$row['score']<=40 && (int)$row['score']>20){
        $sc_40++;
    }
    if((int)$row['score']<=60 && (int)$row['score']>40){
        $sc_60++;
    }
    if((int)$row['score']<=80 && (int)$row['score']>60){
        $sc_80++;
    }
    if((int)$row['score']==100){
        $sc_100++;
    }
}

$per_score = array($sc_100,$sc_80,$sc_60,$sc_40,$sc_20);


?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="pie.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pie Chart</title>
  </head>
  <body>
   <h1>STUDENT vs SCORE</h1>
   <h3>PIE CHART</h3>
   <div class="pie_chart">
       <canvas id="pie"></canvas>
   </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var color = ["#5969ff","#ff407b","#25d5f2","#ffc750","#2ec551","#7040fa","#ff004e","#5969ff","#ff407b","#25d5f2","#5969ff","#ff407b","#25d5f2","#ffc750","#2ec551","#7040fa","#ff004e","#5969ff","#ff407b","#25d5f2"];
        var ctx = document.getElementById("pie").getContext("2d");
        var chart = new Chart(ctx,{
            type: 'pie',
            data: {
                labels:["100","80-100","60-80","20-40","< 20"],
                datasets: [
                    {
                        backgroundColor: color,
                        data:<?php echo json_encode($per_score);?>
                    }
                ]
            },
            options:{
                responsive:true,
                maintainAspectRatio: false,
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
        })
    </script>
  </body>
</html>
