<?php

	//*Sayan Pandey* 15/IT/21*
	$department=isset($_POST["department"])?htmlspecialchars($_POST["department"]):NULL;
	$regno=isset($_POST["regno"])?htmlspecialchars($_POST["regno"]):NULL;
	$rollno=isset($_POST["rollno"])?htmlspecialchars($_POST["rollno"]):NULL;
	$pass=isset($_POST["pass"])?htmlspecialchars($_POST["pass"]):NULL;
	
	//Redirection for anonymous visit
	if(!$department || !$regno || !$rollno){
		header("Location:/students",true,303);
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
	if(!array_key_exists($department,$dept)||$pass==NULL){
		$ip = "Please do not tamper with the site: We can track you with your IP address:".get_client_ip();
		die($ip);
	}
	$table=$dept[$department];
	if($table==="HOME" || $table===NULL){
		die("Select Department !!");
	}
	
	//Connection
		$conn=new mysqli($servername,$username,$password,$database);
		if ($conn->connect_error) {
			die("Fatal connection error!! PLEASE report to the IT department ->".$conn->connect_error());
		}
		
	//Check the registration number and rollno
		$check_status="select * from ".$table." where reg=? and rollno=?";
		if($check = $conn->prepare($check_status)){ 
		$check->bind_param("is",$regno,$rollno);
		if(!$check->execute())
			die("Error: ".$check->error);
		$result=$check->get_result();
			//Register the student now
			if($result->num_rows){
				$sql="update ".$table." set pass = ? where reg=?";
				if($stmt = $conn->prepare($sql)){ 
					$stmt->bind_param("si",$pass,$regno);
					if(!$stmt->execute())
						die("Error: ".$stmt->error);
					echo "success";
				}
				else
					die ("Sorry!! unable to register please try again later");
			}
			else
				die("Sorry!! unable to register please recheck your inputs");
		}
		else
			die ("Seems that the servers are having some trouble");
		$conn->close();
?>