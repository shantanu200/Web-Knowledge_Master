<?php

include 'db.php';
include 'testmail.php';
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && ($_POST['email'] != null || $_POST['username'] != '' || $_POST['password'] != '')) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($conn->connect_error) {
        die('Could not connect to the database.');
    } else {
        $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
        $Insert = "INSERT INTO register(username,email,password) values(?, ?, ?)";
        $stmt = $conn->prepare($Select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($resultEmail);
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sss", $username, $email, $password);
            if ($stmt->execute()) {
                $sub = "Register Success";
                $msg = "New User Successfully added to System by name of " . $username;
                sendmail($email, $sub, $msg);
                
                $_SESSION['status'] = "Register Successful";
                $_SESSION['status_code'] = "success";
                $_SESSION['status_message'] = "Hope! You get confirmation mail on your emailID";
                header('Location:s_main.php');
            } else {
                echo $stmt->error;
            }
        } else {
            $sub = "Register Warning";
            $msg = "A user by name ".$username." is inserting your mail for registration.";
            sendmail($email, $sub, $msg);
            
            $_SESSION['status'] = "Already Exists";
            $_SESSION['status_code'] = "error";
            $_SESSION['status_message'] = "Enter valid and unique Email";
            header('Location:s_main.php');
        }
        $stmt->close();
        $conn->close();
    }
} else {
    $_SESSION['status'] = "Empty Data";
    $_SESSION['status_code'] = "info";
    $_SESSION['status_message'] = "All fields are required";
    header('Location:s_main.php');
    die();
}
