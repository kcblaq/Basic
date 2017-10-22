<?php 
$connect = new mysqli("localhost", "root", "", "register");
if ($connect->connect_error){die("Connection was not succesfull!: ". $connect_error);}
else
{ echo "...". "<br>";}





if(isset($_POST['submit']))
	{
	$nameoforg = $_POST['nameoforg'];
	$address = $_POST['address'];
	$lga = $_POST['lga'];
	
	$nameofchild = $_POST['nameofchild'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$dateofreg = $_POST['dateofreg'];
	$vulscore = $_POST['vulscore'];
	$enrolled = $_POST['enrolled'];
	$comments = $_POST['comments'];
	$month = $_POST['month'];
	
	}
?>
 