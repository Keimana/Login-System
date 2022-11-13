<?php

session_start();
include('databaseconnect.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';
function sendverify($email,$OTP)
 {
    $mail = new PHPMailer(true);

$mail->isSMTP();
$mail->CharSet = "utf-8";
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isHTML(true);

$mail->Username = 'ronanbajerb18@gmail.com';
$mail->Password = 'xpoopsmtnbjjnric';

$mail->setFrom('ronanbajerb18@gmail.com', 'Ronan Company');
$mail->Subject = 'Email Verification';
$emailbody = "
<h2> You have registered!</h2>
<br/><br/>
<p> Dear $email, </p> <h3> Your verification code is $OTP </h3>";

$mail->addAddress($email);


    $mail->Body = $emailbody;
    $mail->send();
}



if (isset($_POST ['submit'])) {

$email = $_POST ['email'];
$password = $_POST ['password'];
$cpass = $_POST ['cpass'];
$OTP = rand(100000, 999999);
$_SESSION["OTP"] = $OTP;
$_SESSION["email"] = $email;
    
}

$check_email_query = "SELECT email FROM dbtest WHERE email ='$email' LIMIT 1";
$check_email_query_run = mysqli_query($conn, $check_email_query);

$check_email_query = "SELECT OTP FROM dbtest WHERE OTP ='$OTP' LIMIT 1";
$check_email_query_run = mysqli_query($conn, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {     	
        ?>
        <script>
        alert ("Sorry the email that you have entered is already exist");
            
        </script>
        <title>Home page </title>
                <link rel="stylesheet" type="text/css" href="style.css">
                </head>
                <body>
                <div class="container" style=" border-left-width: 1px; height: 5880px; padding-top: 400px;
                width: 2000px;">

                <h1 class="text"></h1>
            
                <div class="groupform">
                    <a href="register.php"> Go back</a>
                </div>
            </div>
        <?php
             die();
    }

    else {
    $sql = "INSERT INTO dbtest(email, password, cpass, OTP) VALUES('$email','$password','$cpass', '$OTP')";
    $res = mysqli_query($conn, $sql);
    }
        if ($res) {
            sendverify("$email","$password","$cpass","$OTP");
            $_SESSION['status'] = "Registration Complete! Verification link on your email...";
            header("Location: emailotp.php");
        }
        else {
            header("Location: register.php");
        }
    

?>
