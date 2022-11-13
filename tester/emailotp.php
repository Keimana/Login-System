<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <form  method="post" class="email" action="send.php">
        <div class="alert">

        
        <p class="text" style="font-size: 2rem; font-weight: 800;"> Verification Link</p>
        <p> kindly check the email that we have sent in your email address..</p>
        <p>__________________</p>

        <div class="groupform">
             <input type="text" placeholder="Code" name="email" required>
        </div>   
        <div class="groupform">
             <button name ="verify" class="OTPbtn"> Verify</button>
        </div>
    </form>
    </div>
</body>
</html> 

