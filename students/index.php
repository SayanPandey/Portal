<?php
	session_start();
?>
<!DOCTYPE html>
<!--Sayan Pandey 15/IT/21-->
<html lang='en'>
	<head>
	<title>Students' Portal</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="student.css">
	</head>
	<body>
	<div class="container-fluid">
	<!--Banner-->
	<div id="banner" class="jumbotron jumbotron-fluid ">
		<div class="container">
		<img class="logo" src="img/logo.png">
		<h1 class="display-3">Students' Portal</h1>
		<h3>National Institute of Technology  DURGAPUR, West Bengal</h3>
		<h3>राष्ट्रीय प्रौद्योगिकी संस्थान दुर्गापुर, पश्चिम बंगाल</h3>
		</div>
	</div>
	</div>
	<div class="row container-fluid">
	<!--List-col-1-->
	<div class="col-sm-3" id="list">
		<div class="list-group">
		  <a  onclick="getData(this)" id="home" class="list-group-item list-group-item-action active">Home</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action" >Biotechnology</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Chemical Engineering</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Chemistry</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Civil Engineering</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Computer Applications</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Computer Science and Engineering</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Earth and Environmental Studies</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Electrical Engineering</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Electronics and Communication Engineering</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Humanities and Social Sciences</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Information Technology</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Management Studies</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Mathematics</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Mechanical Engineering</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Metallurgical and Materials Engineering</a>
		  <a  href="#forms" onclick="getData(this)" class="list-group-item list-group-item-action">Physics</a>
		</div>
	</div>
	
	<!--Forms-col-2-->
	<div class="col-sm-9">
		<!-- Welcome -->
		<div id="regi" class="jumbotron jumbotron-fluid alert alert-info" role="alert">
		<div class ="container">
		<h1 class="display-3">HELLO!!</h1>
		<h3>To get through the students' portal:</h3>
		<h5>1. Select your Department from the list.</h5>
		<h5>2. Register yourself if not.</h5>
		<h5>3. Login with your credentials.</h5>
		<div class="alert alert-danger" role="alert">
		 CAUTION: Never share your login credentials with anyone.
		</div>
		</div>
		</div>
		
		<!--form toggle-->
		<div id="departtoggle" style="display:none;">
			<nav id="nav" class="alert alert-success">
				<a class="navbar-brand">To Show / Hide the department list :</a>
			   <button  href="#list" type="button" class="btn btn-success btn-lg" id="departbutton">Click here</button>
			</nav>
		</div>
		
		<!--Forms-->
		<div id="forms">
		
		<!-- First Form -->
		<div class="alert alert-success" role="alert">
		<h1>LOGIN: <span class="depart"></span></h1>
		<h3>  Welcome click on your department from the list  and then use the login form below:</h3>
		</div>
		<form id="form1" method="POST" action="login">
		  <div class="form-group">
			<label>Department</label>
			<input  name="department" class="form-control" id="department" placeholder="Click on the department list" type="text" readonly><br>
			<label for="exampleInputEmail1">Registration number</label>
			<input name="regno" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Registration number" required>
		</div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input name="pass" type="password" class="form-control" id="Password1" placeholder="Password" required>
		  </div>
		  <div id="message1" class="container-fluid alert alert-danger"></div>
		  <button type="submit" class="btn btn-success btn-lg">Login</button>
		</form><br>
		
		
		<!-- Second Form -->
		<!-- Intro -->
		<div class="alert alert-danger" role="alert">
		<h1>REGISTER: <span class="depart"></span></h1>
		<h3>  Hurry up!! Register now by clicking the button below:</h3>
			 <button class="btn btn-danger btn-lg" type="button" id="toggle" onclick="change(this)">
				Register now 
			  </button>
			  <span class="text-muted">Click the button to toggle</span>
		</div>
		
		<!-- registration Form -->
		<form id="form2" action="reg.php" method="POST" style="display:none" role="form" data-toggle="validator">
			<div class="form-group">
			<label>Department</label>
			<input name="department" class="form-control" id="department2" placeholder="Click on the department list" type="text" readonly required><br>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
				<div class="form-group">
				<label>Registration Number</label>
				  <input name="regno" type="number" class="form-control" placeholder="Registration Number" required maxlength=10>
				</div>
				</div>
				<div class="col-sm-6">
				<div class="form-group">
				 <label>Roll Number</label>
				  <input name="rollno" type="text" class="form-control" placeholder="Roll Number" required maxlength=10>
				</div>
				</div>
			 </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input name="pass" type="password" class="form-control" id="p2" placeholder="Password" required  maxlength=50>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Confirm password</label>
			<input type="password" class="form-control" id="cp2" placeholder="Confirm Password" maxlength=50 required>
		  </div>
		  <div id="message" class="container-fluid"></div>
		  <button type="submit" class="btn btn-success btn-lg" id="reg">Register</button><br>
		</form>
	</div>
	</div>
	</div>
	</body>
	<script>
		var error="<?php echo isset($_SESSION['error'])?$_SESSION['error']:0; ?>";
	</script>
	<script type="text/javascript" src="student.js"></script>
</html>
<?php
	session_unset();
	session_destroy();
?>