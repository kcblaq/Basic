<?php include "connecttest.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assignment.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<title> Index </title>

</head>
<body>



	
<div class="container">

				
				
						<?php
							
							if (isset($_POST['submit']))
{
								
								$sql = "INSERT INTO first (`nameoforg`, `month`, `address`, `lga`, `nameofchild`, `age`, `sex`, `dateofreg`, `vulscore`, `enrolled`, `comments`)
										VALUES ('$nameoforg', '$month', '$address', '$lga', '$nameofchild', '$age', '$sex','$dateofreg', '$vulscore', '$enrolled', '$comments')";

							if ($connect->query($sql) === TRUE) {
								echo "New record created successfully";
							} else {
								echo "Error: " . $sql . "<br>" . $connect->error;
							}

							$connect->close();
							}
							
						?>
    

	  
	<table class="table table-bordered table-hover">
				<caption> <h1> OVC PRE-ENROLMENT REGISTER </h1> </caption>
				<form method="post" action=""	enctype="multipart/form-data" name="register">  
					<tr>			
						<th width="20%"> Name of Organization </th>
						<th > <input type="text" name="nameoforg"> </th>
							    
					</tr>
					
					
					<tr>
					<th value="month"> Month </th>
					<td> <input type="text" name="month"> </th>
					</tr>
					<tr>
						<th> Address </th>
						<td> <input type="text" name="address">  </td>
					</tr>
			
					<tr>
						<th> LGA </th>
						<td> <input type="text" name="lga">  </td>
					</tr>
			
			
					<tr>
						<th> &nbsp; </th>
					</tr>
		
		<tr>
		
			<th> Name of child </th>
			<td> <input type="text" name="nameofchild">  </td>
			</tr>
			<tr>
			<th> Address </th>
			<td > <input type="text" name="address">  </td>
			</tr>
			
			<tr>
			<th> Age </th>
			<td > <input type="text" name="age">  </td>
			</tr>
			<tr>
			<th> Sex(M/F) </th>
			<td> <input type="text" name="sex">  </td>
			</tr>
			
			<tr>
			<th> Date Of Registration </th>
			<td> <input type="text" name="dateofreg"> </td>
			</tr>
			
			<tr>
			<th> Vulnerability Score </th>
			<td> <input type="text" name="vulscore"> </td>
			</tr>
			
			<tr>
			<th> Enrolled </th>
			<td class="ali">  <select name="enrolled"> <option>Yes </option> <option> No </option>   </select></td>
			</tr>
			
			<tr>
			<th> Comments </th>
			<td > <input type="text" name="comments"> </td> 
			</tr>
			
			<tr>
			 
			 <td colspan="2" class="ali"> <input type="submit" name="submit" value="Submit"> </td>
			</tr>


		
			
	
		</tr>
		
			
			</form>
			
	</table>			
			
		
			
			
			
		
		
		
		
		<!--<table class="table table-bordered table-hover">
		<tr>
			<th> Name of Organization is : </th>
			<td> <?php if (isset($_POST['submit'])) 

				{
					if
						(isset($_POST['nameoforg'])) 
							{
								echo $nameoforg;
							} else 
							{
								echo "";
								}
					
			
				}			?>
					
			</td>
		</tr>
		-->
		


				

	


</div>
	
</body>
</html>