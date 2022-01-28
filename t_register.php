<?php
//Include Your Database Connection;


include 'db.php';
include 'testmail.php';
    
//Taking Input by User;
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $school = $_POST['school'];

//For New Password
    $password = null;
//For Checking the email is avialble in database or not;
    $efind = false;
    $e_pass = null;
//Retriving the data from database;
    $search = mysqli_query($conn,"SELECT * FROM teacherdata");
    $row = mysqli_num_rows($search);

    while($row = mysqli_fetch_array($search)){
        if($email==$row['email']){
            $e_pass = $row['password'];
            $efind = true;
            break;
        }
    }
    if($efind){
        $sub = "User Already Exists!!";
        $msg = nl2br("There is already a user by name ".$name."\nYour Password = ".$e_pass);

        $flag = sendmail($email,$sub,$msg);
        if($flag){
            $_SESSION['status'] = "Email Exists";
            $_SESSION['status_message'] = "Please Check your Email!!";
            $_SESSION['status_code'] = "error";
            header("Location:teacher_login.php");
        }
        

    }else{
        

        $avail = false;
        function randomPassword(){
            //Global Variables
            global $search;
            global $row;
            global $avail;
            global $password;
            $random = "KMuser".rand(0,1000);

            while($row = mysqli_fetch_array($search)){
                if($random == $row['password']){
                    $avail = true;
                    break;
                }
            }
            if($avail){
                randomPassword();
            }else{
                $password = $random;
                

            }
        }
        randomPassword();
        $insert = mysqli_query($conn,"INSERT INTO teacherdata(name,email,password,institute) VALUES('$name','$email','$password','$school')");
        $sub = "Register Success!!";
        $msg = nl2br("New user created!!\nWelcome!! To Knowledge Master\nName = ".$name."\nInstitution = ".$school."\nPassword = ".$password);
        $flag = sendmail($email,$sub,$msg);
        
        if($flag){
            $_SESSION['status'] = "Registration Successful!";
            $_SESSION['status_message'] = "Hope! You get your Password on respective emailId";
            $_SESSION['status_code'] = "success";
            header("Location:teacher_login.php");
        }
    
    }
}
?>