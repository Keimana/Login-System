


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
    <form  method="post" class="email" action="send.php">
        <div class="alert">
            <?php 
                if (isset($_SESSION['status'])) {
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                  }
            ?>

        <p class="text" style="font-size: 2rem; font-weight: 800;"> Register</p>
        <div class="groupform">
             <input type="email" placeholder="Email Address" name="email" required>
        </div>
        <div class="groupform">
             <input type="password" class="pass" placeholder="Password" name="password" required>
        </div>
        <div class="groupform">
             <input type="password" class="cpass" placeholder="Confirm Password" name="cpass" required>
        </div>
        <div class="groupform">
             <button name ="submit" class="rgsbtn"> Sign up!</button>
        </div>
        <p class="register">Don't have an account? <a href="login.php"><div> login Here</div></a></p>
    </form>
    </div>
</body>
</html>