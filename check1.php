<?php  
	if (isset($_POST['submitcontact'])) {
		$email=$_POST['mail'];
		$password=$_POST['password'];
		session_start();
		if (!empty($email) && !empty($password)) {
			// header('Location:admin1.php')
			if ($email=="admin@code.edu.az" && $password=="123456") {
				header('Location:admin1.php');
			}else{
				header('Location:index.php')
			};
			else{
			$_SESSION['mail'] = 'Maili daxil edin'
			$_SESSION['password'] ='Parolu daxil edin'
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			background-color: #EDEFF0;
		}
		.admin{
			background-color: #FFFFFF;
		}
		.email{
			padding: 5px;
			border-radius:3px;
			margin-bottom: 20px;
		}
		.password{
			padding: 5px;
			border-radius:3px;
			margin-bottom: 30px;
		}
		.submit{
			text-decoration: none;
			background-color: #76AB3C;
			padding: 10px 25px;
			color: white;
			border-radius: 3px;
			box-shadow: transparent;
		}
		.submit:hover{
			text-decoration: none;
			box-shadow: transparent;
		}
		.code{
			padding: 10px 0px;
			background-color: #FAFAFA;
			margin-top: 20px;
		}
		img{
			margin-top: 30px;
		}
	</style>
<body>
	<div class="container-fluid">
		<div class="container">
		<div class="col-md-4 col-md-offset-4 admin">
			<center>
				<form action="admin1.php" method="post">
					<img src="https://lh3.googleusercontent.com/UwvoKfyH1WEW6zAYRnSKld0Fe7V_lNH24EcyVKGPZbdWHw19pDWcW0CQUQwYB5i3T3a3QA=w1904-h947">
					<h3>Admin Login</h3>
					<p>Sign in to your account</p>
					<input type="text" name="email" placeholder="Email Address" class="email">
					<input type="password" name="password" placeholder="Password" class="password">
					<center><input type="submit" value="Sign in" class="submit">
					</center>
					<center><p class="code">Code Academy 2016. All rights reserved.</p></center>
				</form>
			</center>
		</div>
		</div>
	</div>
</body>
</html>