<?php
//Server credentials
$servername='localhost';
$username='root';
$password='';
$database='Portal';
//Connection
$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    $_SESSION['error']="Fatal connection error!! PLEASE report to the IT department ->".$conn->connect_error();
    header("Location:/students",true,303);
    die();
}
?>