<?php include 'db.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/s_main.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="s_login.php" class="sign-in-form" method="POST">
            <h2 class="title">SIGN IN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon" onclick="icon()">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon" onclick="icon()">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon" onclick="icon()">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon" onclick="icon()">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="s_register.php" class="sign-up-form" method="POST" autocomplete="off">
            <h2 class="title">SIGN UP</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" name="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon" onclick="icon()">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon" onclick="icon()">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon" onclick="icon()">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon" onclick="icon()">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Become a member of Family and explore more new things.<br>Knowledge Master Family is waiting for you. 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Already member of family!!!<br>For what you are looking for log to system and explore more.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
    <script src="js/alert.js"></script>
  </body>
</html>

<?php include 'sweet_alert_one.php'; ?>