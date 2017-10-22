<?php include "connecttest.php"; ?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<title> TEST! </title>
</head>
<body>
<?php

if (isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$sql = "INSERT INTO test (`name`, `email`)
			VALUES ('$name', '$email')";

if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
}
?>
<div class="jumbotron container">
	<form method="post" enctype="multipart/formdata">
Name: 	<input type="text" name="name">
Email: 	<input type="text" name="email">
		<input type="submit" name="submit">
	</form>
	

</div>
</body>
</html>