<?php  include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/c_style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
           Knowledge Master is an online web based QUIZ application which is based on IOT subject.
           These application still under developement so you can feel free to suggest us any change or add-on feature.
           Don't forget to post your review about our application.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Vishwakarma Institute of Technology, Pune</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>knwldgmaster@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>+91-7709493932</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a  onclick="display()">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a onclick="display()">
                <i class="fab fa-twitter"></i>
              </a>
              <a  onclick="display()">
                <i class="fab fa-instagram"></i>
              </a>
              <a  onclick="display()">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="contact_data.php" autocomplete="off" method="POST">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Review</label>
              <span>Opinion</span>
            </div>
            <input type="submit" name="send" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
    <script src="js/alert.js"></script>
    <script src="js/c_app.js"></script>
  </body>
</html>

<?php include 'sweet_alert_one.php'; ?>