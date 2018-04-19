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
		<link rel="stylesheet" type="text/css" href="student.css">
	</head>
	<body>
	<div class="container-fluid">
	<!--Banner-->
	<div id="banner" class="jumbotron jumbotron-fluid ">
		<div class="container">
		<img class="logo" src="img/logo.png">
		<h1 class="display-3">Administrators' Portal</h1>
		<h3>National Institute of Technology  DURGAPUR, West Bengal</h3>
		<h3>राष्ट्रीय प्रौद्योगिकी संस्थान दुर्गापुर, पश्चिम बंगाल</h3>
		</div>
	</div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class=" nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">HOME</a></li>
		<li><a onclick="setTable(1,this)" data-toggle="tab" href="#s1">SEMESTER I</a></li>
		<li><a onclick="setTable(2,this)" data-toggle="tab" href="#s2">SEMESTER II</a></li>
		<li><a onclick="setTable(3,this)" data-toggle="tab" href="#s3">SEMESTER III</a></li>
		<li><a onclick="setTable(4,this)" data-toggle="tab" href="#s4">SEMESTER IV</a></li>
		<li><a onclick="setTable(5,this)" data-toggle="tab" href="#s5">SEMESTER V</a></li>
		<li><a onclick="setTable(6,this)" data-toggle="tab" href="#s6">SEMESTER VI</a></li>
		<li><a onclick="setTable(7,this)" data-toggle="tab" href="#s7">SEMESTER VII</a></li>
		<li><a onclick="setTable(8,this)" data-toggle="tab" href="#s8">SEMESTER VIII</a></li>
		<li style="float:right;"><div> 
		<a href="#" class="btn btn-success">
		  <span class="glyphicon glyphicon-circle-arrow-left"></span> Back to Portal
		</a>
		<a href="#" class="btn btn-danger">
		  <span class="glyphicon glyphicon-log-out"></span> Log out
		</a>
		</div><br></li>
		</ul>
	</div>
</div>

<!--form toggle-->
<div id="departtoggle" class="container" style="display:none;">
<nav id="nav" class="alert alert-success hmm">
		<a class="navbar-brand">To Show / Hide the department list :</a>
		<button  href="#list" type="button" class="btn btn-success btn-lg" id="departbutton" style="box-shadow:black 0 0 10px">Click here</button>
<!--SEMESTER navbar-->
	<div class="navbar-header">
	<button type="button" style="border:solid #14700A 3px;box-shadow:black 0 0 10px" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span style="color:black;"class="sr-only">Toggle navigation</span>
		<span style="border:solid #14700A 2px;"class="icon-bar"></span>
		<span style="border:solid #14700A 2px;"class="icon-bar"></span>
		<span style="border:solid #14700A 2px;"class="icon-bar"></span>
	</button>
	</div>
</nav>
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
		<h3>To get through the Administrators' portal:</h3>
		<h5>1. Select your Department from the list.</h5>
		<h5>2. Select Semester.</h5>
		<h5>3. Review requests.</h5>
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