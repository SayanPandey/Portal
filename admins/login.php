<?php
	session_start();
	$_SESSION['error']=NULL;
	$_SESSION['loginadmin']=NULL;
	
	//*Sayan Pandey* 15/IT/21*
	$username_admin=isset($_POST["username"])?htmlspecialchars($_POST["username"]):NULL;
	$pass=isset($_POST["pass"])?htmlspecialchars($_POST["pass"]):NULL;
	//Redirection for anonymous visit
	if(!$username_admin || !$pass){
		header("Location:/Portal/admins/",true,303);
		die();
	}

	require "connection.php";
	//Check the Credentials
		$check_status="select * from admins where username=? and pass=?";
		if($check = $conn->prepare($check_status)){  
			$check->bind_param("ss",$username_admin,$pass);
		if(!$check->execute())
			echo $check->error;
		$result=$check->get_result();
			//Check Admin
			if($result->num_rows){
				$_SESSION['loginadmin']=1;
				$redirect="Location:/Portal/admins/admins.php";
				header($redirect,true,303);
				die();
			}
			else{
				$_SESSION['error']="Sorry!! unable to login please recheck your inputs";
				header("Location:/Portal/admins/",true,303);
				$_SESSION['loginadmin']=NULL;
				die();
			}
		}
		else{
			$_SESSION['error']="Seems that the servers are having some trouble";
			header("Location:/Portal/admins",true,303);
			$_SESSION['loginadmin']=NULL;
			die();
		}
		$conn->close();	
?>