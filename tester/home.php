<?php 
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style=" border-left-width: 1px; height: 5880px; padding-top: 400px;
width: 2000px;">

        <h1 class="text"> Hello user, Welcome!</h1>
       
        <div class="groupform">
             <a href="logout.php"> Logout</a>
        </div>
       

    </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>