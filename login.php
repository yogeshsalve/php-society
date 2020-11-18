<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
	body {
  		background-image: url('images/register.png');
  		background-repeat: no-repeat;
  		background-size: 1360px 650px;

  		/*background-color: #66d9ff;*/

	}
	.card-border-primary 
	{
		 margin: 220px 10px 50px 750px;
		 border: 4px solid black;
		 border-radius: 12px;
	
	}
	</style>

</head>
<body>
  <div class="card-border-primary  " style="max-width: 25rem;">
  <div class="card-header">Login</div>
  <div class="card-body text-primary">
    
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" style="width: 25rem;" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"  style="width: 25rem;">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>



  </div>
</div>

	<!-- <div class="container">
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	</div> -->
</body>
</html>
