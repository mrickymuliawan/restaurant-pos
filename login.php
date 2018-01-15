
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	

</head>
<body>
<div class="login-wrapper">
	<div class="container">
		<div class="row">
			<div class="offset-sm-2 col-sm-8 ">
				
				<form action="function/proseslogin.php" method="post">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="fa fa-user "></span>
						</div>
						<input type="text" name="username" placeholder="Username" class="form-control input" >
					</div>
				</div>
				
				<div class="form-group ">
					<div class="input-group">
						<div class="input-group-addon">
							<span class="fa fa-lock "></span>
						</div>
						<input type="password" name="pass" placeholder="Password" class="form-control input">
					</div>
				</div>

				<div class="form-group row">
	 				
		 			<div class="col-sm-12">
		 				<input type="submit" name="login" value="Login" class="btn btn-custom form-control">
		 			</div>
	 				<div class="col-sm-12">
	 					<?php 
	 						echo isset($_GET['pesan'])?$_GET['pesan']:''; 
	 					?>
	 				</div>
	 			</div>
					
				</form>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>