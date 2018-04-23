<!DOCTYPE html>
<!--Sayan Pandey 15/IT/21-->
<html lang='en'>
	<head>
		<title>INFORMATION TECHNOLOGY</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="dept.css">
		<!--JQuery UI-->
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	</head>
	<body>
	
	<!--Page Container-->
	<div class="container-fluid">
	<!--Banner-->
	<div id="banner" style="background-image:url('/Portal/students/img/it.jpg');" class="jumbotron jumbotron-fluid ">
		<div class="container">
		<img class="logo" style="float:left;" src="/Portal/students/img/logo.png">
		<h1 class="display-3">INFORMATION TECHNOLOGY</h1>
		<h3>National Institute of Technology  DURGAPUR, West Bengal</h3>
		<h3>राष्ट्रीय प्रौद्योगिकी संस्थान दुर्गापुर, पश्चिम बंगाल</h3>
		</div>
	</div>
	
	<!--SEMESTER navbar-->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav nav-tabs">
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

	<!--SEMESTER navbar-->
	<div class="container-fluid">
	<div class="navbar-header hmm">
		<h3 style="float:left">&nbsp;&nbsp;&nbsp;Select Semester Here :</h3>
	<button type="button" style="border:solid #A200FF 3px;box-shadow:black 0 0 10px;" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span style="color:black;"class="sr-only">Toggle navigation</span>
		<span style="border:solid #A200FF 2px;"class="icon-bar"></span>
		<span style="border:solid #A200FF 2px;"class="icon-bar"></span>
		<span style="border:solid #A200FF 2px;"class="icon-bar"></span>
	</button>
	</div>
	</div>
	  
	  <!--Semester-Tabs-->
	   <div class="tab-content">
	   <!--Welcome tab-->
		<div id="home" class="hmm	 tab-pane fade in active alert alert-info jumbotron jumbotron-fluid ">
			<div class="container">
			<h1 class="display-3">Welcome !!</h1>
			<h3>Please Select your semester</h3>
			<div class="alert alert-success">
			<h3>Select your semester and wisely fill your choices.</h3>
			<h3>Good Luck!!</h3>
			</div>
			</div>
		</div>
		
		<!--SEMESTER-1-->
		<div id="s1" class="tab-pane container-fluid fade row">
				<div class="hmm col-md-3 jumbotron alert-info">
					<h2>Your Choices here (SEM-1):</h2>
					<p class="text-muted">Keep your highest preference on top and lowest at the bottom</p>
					<div class="drop_box1 jumbotron alert-info">
					</div>
				<div class="alert-danger">
				<p>WARNING: Once you Submit your response,no further alteration will be entertained</p>
				</div><br>
				<!--Manipulating-buttons-->
					<a class="clear btn btn-lg btn-danger">Clear</a>
					<a class="btn btn-lg btn-success" onclick="submit(1)">Submit</a>
				</div>
			  <div class="col-md-9">
			  <h1 class="hmm alert alert-info">SEMESTER I</h1>
				<div id="sem_tab1">
				</div>
			  </div>
			</div>
			
		<!--SEMESTER-2-->
		<div id="s2" class="tab-pane fade row container-fluid">
				<div class="hmm col-md-3 jumbotron alert-info">
					<h2>Your Choices here (SEM-2):</h2>
					<p class="text-muted">Keep your highest preference on top and lowest at the bottom</p>
					<div class="drop_box2 jumbotron alert-info">
					</div>
				<div class="alert-danger">
				<p>WARNING: Once you Submit your response,no further alteration will be entertained</p>
				</div><br>
				<!--Manipulating-buttons-->
					<a class="clear btn btn-lg btn-danger">Clear</a>
					<a class="btn btn-lg btn-success" onclick="submit(2)">Submit</a>
				</div>
			  <div class="col-md-9">
			  <h1 class="hmm alert alert-info">SEMESTER II</h1>
				<div id="sem_tab2">
				</div>
			  </div>
			</div>
			
		<!--SEMESTER-3-->
			<div id="s3" class="tab-pane container-fluid fade row">
				<div class="hmm col-md-3 jumbotron alert-info">
					<h2>Your Choices here (SEM-3):</h2>
					<p class="text-muted">Keep your highest preference on top and lowest at the bottom</p>
					<div class="drop_box3 jumbotron alert-info">
					</div>
				<div class="alert-danger">
				<p>WARNING: Once you Submit your response,no further alteration will be entertained</p>
				</div><br>
				<!--Manipulating-buttons-->
					<a class="clear btn btn-lg btn-danger">Clear</a>
					<a class="btn btn-lg btn-success" onclick="submit(3)">Submit</a>
				</div>
			  <div class="col-md-9">
			  <h1 class="hmm alert alert-info">SEMESTER III</h1>
				<div id="sem_tab3">
				</div>
			  </div>
			</div>
			
		<!--SEMESTER-4-->
			<div id="s4" class="tab-pane container-fluid fade row">
				<div class="hmm col-md-3 jumbotron alert-info">
					<h2>Your Choices here (SEM-4):</h2>
					<p class="text-muted">Keep your highest preference on top and lowest at the bottom</p>
					<div class="drop_box4 jumbotron alert-info">
					</div>
				<div class="alert-danger">
				<p>WARNING: Once you Submit your response,no further alteration will be entertained</p>
				</div><br>
				<!--Manipulating-buttons-->
					<a class="clear btn btn-lg btn-danger">Clear</a>
					<a class="btn btn-lg btn-success" onclick="submit(4)">Submit</a>
				</div>
			  <div class="col-md-9">
			  <h1 class="hmm alert alert-info">SEMESTER IV</h1>
				<div id="sem_tab4">
				</div>
			  </div>
			</div>
			
		<!--SEMESTER-5-->
			<div id="s5" class="tab-pane container-fluid fade row">
				<div class="hmm col-md-3 jumbotron alert-info">
					<h2>Your Choices here (SEM-5):</h2>
					<p class="text-muted">Keep your highest preference on top and lowest at the bottom</p>
					<div class="drop_box5 jumbotron alert-warning">
					</div>
				<div class="alert-danger">
				<p>WARNING: Once you Submit your response,no further alteration will be entertained</p>
				</div><br>
				<!--Manipulating-buttons-->
					<a class="clear btn btn-lg btn-danger">Clear</a>
					<a class="btn btn-lg btn-success" onclick="submit(5)">Submit</a>
				</div>
			  <div class="col-md-9">
			  <h1 class="hmm alert alert-info">SEMESTER V</h1>
				<div id="sem_tab5">
				</div>
			  </div>
			</div>
		
		<!--SEMESTER-6-->
			<div id="s6" class="tab-pane container-fluid fade row">
				<div class="hmm col-md-3 jumbotron alert-info">
					<h2>Your Choices here (SEM-6):</h2>
					<p class="text-muted">Keep your highest preference on top and lowest at the bottom</p>
					<div class="drop_box6 jumbotron alert-info">
					</div>
				<div class="alert-danger">
				<p>WARNING: Once you Submit your response,no further alteration will be entertained</p>
				</div><br>
				<!--Manipulating-buttons-->
					<a class="clear btn btn-lg btn-danger">Clear</a>
					<a class="btn btn-lg btn-success" onclick="submit(6)">Submit</a>
				</div>
			  <div class="col-md-9">
			  <h1 class="hmm alert alert-info">SEMESTER VI</h1>
				<div id="sem_tab6">
				</div>
			  </div>
			</div>
			
		<!--SEMESTER-7-->
			<div id="s7" class="tab-pane container-fluid fade row">
				<div class="hmm col-md-3 jumbotron alert-info">
					<h2>Your Choices here (SEM-7):</h2>
					<p class="text-muted">Keep your highest preference on top and lowest at the bottom</p>
					<div class="drop_box7 jumbotron alert-info">
					</div>
				<div class="alert-danger">
				<p>WARNING: Once you Submit your response,no further alteration will be entertained</p>
				</div><br>
				<!--Manipulating-buttons-->
					<a class="clear btn btn-lg btn-danger">Clear</a>
					<a class="btn btn-lg btn-success" onclick="submit(7)">Submit</a>
				</div>
			  <div class="col-md-9">
			  <h1 class="hmm alert alert-info">SEMESTER VII</h1>
				<div id="sem_tab7">
				</div>
			  </div>
			</div>
		
		<!--SEMESTER-8-->
			<div id="s8" class="tab-pane container-fluid fade row">
				<div class="hmm col-md-3 jumbotron alert-info">
					<h2>Your Choices here (SEM-8):</h2>
					<p class="text-muted">Keep your highest preference on top and lowest at the bottom</p>
					<div class="drop_box8 jumbotron alert-info">
					</div>
				<div class="alert-danger">
				<p>WARNING: Once you Submit your response,no further alteration will be entertained</p>
				</div><br>
				<!--Manipulating-buttons-->
					<a class="clear btn btn-lg btn-danger">Clear</a>
					<a class="btn btn-lg btn-success" onclick="submit(8)">Submit</a>
				</div>
			  <div class="col-md-9">
			  <h1 class="hmm alert alert-info">SEMESTER VIII</h1>
				<div id="sem_tab8">
				</div>
			  </div>
			</div>
			
		</div>
	</div>
	<script src="/Portal/students/dept/_it.js"></script>
	</body>
</html>