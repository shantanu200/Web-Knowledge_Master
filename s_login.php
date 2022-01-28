<?php 
include 'db.php';
include 'testmail.php';


$success = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM register WHERE username='$username'";
    $email = null;
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num==1){
        while($num = mysqli_fetch_array($result)){
            $email=$num['email'];
        }
        $_SESSION['username']=$username;
        $success = true;
    }else{
        $success = false;
    }
    if($success){
           $sub = "Login Success";
           $msg = "Welcome Back to System!! and Enjoy Learning";
           sendmail($email,$sub,$msg);
           
           $_SESSION['status'] = "Login Success";
           $_SESSION['status_code'] = "success";
           $_SESSION['status_message']="You can start quiz";
           header('Location:s_quiz.php');
    }
    else{
          $_SESSION['status'] = "Invalid User";
          $_SESSION['status_code'] = "error";
          $_SESSION['status_message'] = "Enter Correct Credentials";
          header('Location:s_main.php');
    }
}
?>