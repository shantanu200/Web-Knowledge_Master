<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Master</title>
    <link rel="stylesheet" href="css/s_quiz.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body class="body_div">
    
    <div class="start_btn"><button>Start Quiz</button></div>

    
    <div class="info_box">
        <div class="info-title"><span>Quiz Rules</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>
        <div class="scoreboard">
        <div class="score">
        <div class="score_text">TOTAL SCORE</div>
        <div class="mscore">00</div>
        </div> 
        <div class="corr">
        <div class="corr_text">CORRECT QUE.</div>
        <div class="mcorr">00</div> 
        </div> 
        <div class="wrong">
        <div class="wrong_text">WRONG QUE.</div>
        <div class="mwrong">00</div>  
        </div>
        </div> 
        
    <div class="quiz_box">
        <header>
            <div class="title">Knowledge Master</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">10</div>
            </div>
            <div class="time_line"></div>
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
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/questions.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

<?php include 'sweet_alert_two.php'; ?>