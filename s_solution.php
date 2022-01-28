<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Solutions</title>
    <link rel="stylesheet" href="css/s_solution.css">

</head>

<body>
    <div class="solution_btn"><button>SOLUTION</button></div>
    <div class="quiz_box">
        <header>
            <div class="title">KNOWLEDGE MASTER</div>
        </header>
        <section>
            <div class="que_text">

            </div>
            <div class="option_list">
            </div>
        </section>
        <footer>
            <div class="total_que">
            </div>
            <div class="f_button">
            <button class="prev"><i class="fas fa-backward"></i> Prev</button>
            <button class="sol_btn">Solution</button>
            <button class="next_btn"><i class="fas fa-forward"></i> Next</button>
            </div>
        </footer>
    </div>

    <!-- SOlution Box -->

    <div class="sol_box">
        <header>
            <div class="title">SOLUTION</div>
            <button class="back"><i class="fas fa-arrow-alt-circle-left"></i> Return</button>
        </header>
        <section>
            <div class="ans">Answer : </div>
            <p class="answer"></p><br>
            <div class="dis">Description: </div>
            <p id="myel"></p>

        </section>
        <footer>
            <div class="link">Read More:<br>
                <a onclick="hrefl()" id="read" class="read"></a></div>

        </footer>
    </div>

    <script src="js/questions.js"></script>
    <script src="js/s_solution_que.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/s_solution.js"></script>

</body>
</html>

<?php include 'sweet_alert_two.php'; ?>