<?php
	session_start();
?>
<!DOCTYPE html>
<!--Sayan Pandey 15/IT/21-->
<html lang='en'>
	<head>
	<title>Administrators' Portal</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="admin.css">
	</head>
	<body>
	<br>
	<!--Banner-->
	<div class="container-fluid" >
	<div id="banner" class="jumbotron jumbotron-fluid" >
		<div class="container">
		<img class="logo" src="img/logo.png">
		<h1 class="display-3">Administrators' Portal</h1>
		<h3>National Institute of Technology  DURGAPUR, West Bengal</h3>
		<h3>राष्ट्रीय प्रौद्योगिकी संस्थान दुर्गापुर, पश्चिम बंगाल</h3>
	<!--form row-->
	<div class="container-fluid">
	<div class="row bg">
	<div class="col-md-3 col-sm-3 col-xs-12"></div>
	<div class="col-md-6 col-sm-6 col-xs-12 fm">
		<!--Sayan Pandey 15/IT/21-->
			<form action="/Portal/admins/login.php" method="POST">
				<div class="form-group">
					<label for="email">Username:</label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="password" name="pass">
				</div>
				<h5 class="alert alert-danger" id="errormsg" style="text-shadow:none;display:none"></h5>
				<button type="submit" class="btn btn-success btn-lg">Submit</button>
			</form> 
	</div>
		<div class="col-md-3 col-sm-3 col-xs-12"></div>
	</div>
	</div>
	</div>
	</div>
	</body>
	<script>
		var error="<?php echo isset($_SESSION['error'])?$_SESSION['error']:0; ?>";
	</script>
	<script>
		$(document).ready(function(){
				if(error!=0){
					$("#errormsg").text(error).show();
				}
	});
	</script>
</html>
<?php
	session_unset();
	session_destroy();
?>