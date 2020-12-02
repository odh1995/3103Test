<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>Login Page </title>

	<style>
		label {
			width: 100%;
			max-width: 100px;
			display: inline-block;
			text-align: right;
		}

		div {
			margin-top: 1em;
		}
	</style>

</head>

<body>
 <form action="auth/login.php" method="post">	
	<div>
		<label>password</label>
		<input type="password" name="password">
	</div>
	<span class="error"><?php echo $passwordErr;?></span>
	<div>
		<input type='submit' value="Login" style="margin-left: 105px;">
	</div>
	<input type="hidden" name="submitted" value="1">
</form>
</body>

</html>
