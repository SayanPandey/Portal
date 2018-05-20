<?php
    require 'connection.php';
    $sql = "SELECT Season from admins";
    $result = $conn->query($sql);
    $season=NULL;
    if(!$_SESSION['loginadmin']){
		header("Location:/Portal/admins/",true,303);
		die();
	}
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $season=$row['Season'];
        }
        if($season==1){
            $sql = "Update admins set Season=0;";
            $result = $conn->query($sql);
            echo '0';
        }
        else{
            $sql = "Update admins set Season=1;";
            $result = $conn->query($sql);
            echo '1';
        }
        die();
    } else {
        echo 'Something is wrong!!';
    } 
?>