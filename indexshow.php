<?php include "connecttest.php"; ?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assignment.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<title> Indexshow </title>

</head>
<body>
	
<div class="container">

	
	<?php
		
		$result=$connect->query("SELECT * FROM first");
		
		
		
				while($row=$result->fetch_object()):?>
	
		<table class="table table-bordered table-hover">
			<caption> <h1> OVC PRE-ENROLMENT RESULT </h1> </caption>
			<thead>
			<tr>
			<th size="30" colspan="2"> Name of Organization </th>
			<td size="60" colspan="3"> <?php echo $row->nameoforg ?> </td>
			<th colspan="2" size="15" width="15%"> Month:</th> <td>	<?php  echo $row->month ?>  </td>
		    
			</tr>
			
			<tr>
			<th> Address </th>
			<td colspan="7"> <?php echo $row->address  ?>  </td>
			</tr>
			
			<tr>
			<th> LGA </th>
			<td colspan="7"> <?php echo $row->lga ?>  </td>
			</tr>
			
			
			<tr>
			<th colspan="8"> &nbsp; </th>
			</tr>
			
			<tr>
			<th> S/N </th>
			<th name="nameofchild"> Name of Child</th>
			<th> Age </th>
			<th> Sex (M/F) </th>
			<th> Date Of Registration </th>
			<th width="20%"> Vulnerability Score </th>
			<th> Enrolled (Y/N) </th>
			<th> Comments </th>
			
			
			</tr>
			
			</thead>
			
		<tr>
			
			
			<td size="30">  <?php echo $row->sn	?>  </td>
			<td size="4"> <?php	echo $row->nameofchild ?>  </td>
			<td size="40" width="20%"> <?php echo $row->age	?>  </td>
			<td size="40" width="15%"> <?php echo $row->sex ?>  </td>
			<td size="4"> <?php echo $row->dateofreg	?>  </td>
			<td size="8"> <?php echo $row->vulscore	?>  </td>
			<td size="10"> <?php echo $row->enrolled	?>  </td>
			<td size="8"> <?php 	echo $row->comments ?>  </td>
			
			
			
		</tr>
			 
		
		
		</table>	
		

		<?php endwhile;?>
	
	

	
	
	
	
	</div>
	</body>
	</html>