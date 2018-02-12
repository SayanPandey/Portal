<?php
	session_start();
	$_SESSION['error'];
	
	//*Sayan Pandey* 15/IT/21*
	$department=isset($_POST["department"])?htmlspecialchars($_POST["department"]):NULL;
	$regno=isset($_POST["regno"])?htmlspecialchars($_POST["regno"]):NULL;
	$pass=isset($_POST["pass"])?htmlspecialchars($_POST["pass"]):NULL;
	
	//Redirection for anonymous visit
	if(!$department || !$regno){
		header("Location:/students",true,303);
		die();
	}
	
	//Dictionery array
	$dept=array(
		"Biotechnology"=>"BT",
		"Chemical Engineering"=>"CE",
		"Chemistry"=>"CHE",
		"Civil Engineering"=>"CE",
		"Computer Applications"=>"CAP",
		"Computer Science and Engineering"=>"CSE",
		"Earth and Environmental Studies"=>"EVS",
		"Electrical Engineering"=>"EE",
		"Electronics and Communication Engineering"=>"ECE",
		"Humanities and Social Sciences"=>"HSS",
		"Information Technology"=>"IT",
		"Management Studies"=>"MNG",
		"Mathematics"=>"MATH",
		"Mechanical Engineering"=>"MECH",
		"Metallurgical and Materials Engineering"=>"MME",
		"Physics"=>"PHY",
		"HOME"=>"HOME",
		NULL=>NULL
	);
	
	//Server credentials
	$servername='localhost';
	$username='root';
	$password='';
	$database='dep';
	
	//Breaching/Tampering error
	// Function to get the client IP address
	function get_client_ip() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
		   $ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
	if(!array_key_exists($department,$dept)|| $pass==NULL){
		$_SESSION['error'] = "Please do not tamper with the site: We can track you with your IP address:".get_client_ip();
		header("Location:/students",true,303);
		die();
	}
	$table=$dept[$department];
	if($table==="HOME" || $table===NULL){
		$_SESSION['error']="Select Department !!";
		header("Location:/students",true,303);
		die();
	}
	//Connection
		$conn=new mysqli($servername,$username,$password,$database);
		if ($conn->connect_error) {
			$_SESSION['error']="Fatal connection error!! PLEASE report to the IT department ->".$conn->connect_error();
			header("Location:/students",true,303);
			die();
		}
	
	//Check the registration number
		$check_status="select * from ".$table." where reg=? and pass=?";
		if($check = $conn->prepare($check_status)){ 
		$check->bind_param("is",$regno,$pass);
		$check->execute();
		$result=$check->get_result();
			//Register the student now
			if($result->num_rows){
				$redirect="Location:/students/dept/".$table;
				header($redirect,true,303);
				die();
			}
			else{
				$_SESSION['error']="Sorry!! unable to login please recheck your inputs";
				header("Location:/students",true,303);
				die();
			}
		}
		else{
			$_SESSION['error']="Seems that the servers are having some trouble";
			header("Location:/students",true,303);
			die();
		}
		
		$conn->close();
		
?>