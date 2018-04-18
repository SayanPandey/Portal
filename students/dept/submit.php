<?php

	//Sayan Pandey 15/IT/21
	$regno=isset($_POST["regno"])?htmlspecialchars($_POST["regno"]):20150213;
	$sem=isset($_POST["sem"])?htmlspecialchars($_POST["sem"]):NULL;
	//Redirection for anonymous visit
    /*if(!$regno || !$sem || !$choice){
		header("Location:/students",true,303);
    }*/
    
    $choice=NULL;
    if(!empty($_POST['sub_list'])){
        $choice=implode(",",$_POST['sub_list']);
    }
    //Connection
    require "../connection.php";
    date_default_timezone_set('Asia/Kolkata');
    //Register the student now
        $sql="update IT set S".$sem."=? where regno=?";
        if($stmt = $conn->prepare($sql)){ 
            $stmt->bind_param("si",$choice,$regno);
            if(!$stmt->execute())
                die("Error: ".$stmt->error);
            echo "Your response <span style='color:#2AFF00'> \" ".$choice." \"</span> has been recorded at<span style='color:#00E4FF'> \" ".date("h:i:s a")." on ".date("d/m/Y")." \"</span> Feel free to update anytime before the season ends.";
        }
        else
            die ("Sorry!! Registration Season is over,if you haven't registered contact admin");
?>
