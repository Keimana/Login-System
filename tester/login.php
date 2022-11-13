<?php 
session_start(); 
include "databaseconnect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);




	if (empty($email)) {
	?>
        <script>
            alert ("Incorrect Email");
        </script>
	<?php

		exit();
	}
	else {
		$sql = "SELECT * FROM dbtest WHERE email='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['ID'] = $row['ID'];
            	header("Location: home.php");
		        exit();
            } 
			else {
				?>
				<script type="text/javascript">
   						alert("Incorrect Email or Password");
   				window.location = "http://localhost/tester/index.php";
				</script>
			<?php
			die();

			}
		} 

		else {
			?>
				<script type="text/javascript">
   						alert("Incorrect Email or Password");
   				window.location = "http://localhost/tester/index.php";
				</script>
		<?php
		die();
		}
	}
	
} 
else {
	header("Location: index.php");
	exit();
}