<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="container">
     <form action="login.php" method="post" class="email">
        <h1>Login</h1>
<div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="margin-left: 7px;"><?php echo $_GET['error']; ?></p>
     		<?php 
			} 
 		?>
 </div>       
        <div class="groupform">
     	    <input style=" margin-top: 10px;" class=" input" type="email" name="email" placeholder="Email"><br>
        </div>
        <div class="groupform">
            <input class=" input" type="password" name="password" placeholder="Password"><br>
        </div>
        <div class="groupform">
     	    <button class="btn" type="submit">Login</button>
        </div>   
        <p class="register">Do not have an account?</p>
    
			<div>
			<a href="register.php"> Register Here </a>
			</div>
</form>

</div>
</body>
</html>