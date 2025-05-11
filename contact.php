<?php

//$db = mysqli_connect("localhost","root","mysql","tiptopdresses");
$db = mysqli_connect("localhost","u714131570_admin","Sadmin2626","u714131570_tiptopdresses");
if(mysqli_connect_error())
	{
	echo"Cannot Connect";
	}
else{
	//echo"connected";
}
?>
<html lang="en">
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



	</head>

	<body>
	<div id="container">	
		<div class="card card-body">    
        	<div class="row d-flex my-auto">  
			<h1 style="color:red;font-size: 45px;" align="center"><strong><u>Tip Top Dresses</u></strong><span></span></h1>
			<div style="color:Black;font-size: 35px;" class="mt-1" ><h2><strong>Contect Form Records</strong></h2></div>
				<div class="col-md-12 mt-2" >
					<table width="80%" class="table table-striped  table-hover rounded">
						<tr class="bg-primary text-white">
							<th>Sno</th>
							<th>Name</th>
							<th>Phone Number</th>
							<th>Subject</th>
							<th>Massage</th>
							<th>Date</th>
							<!---
							<th>Edit </th>
							<th>Delete</th>
							----->
						</tr>
							<?php
								$sql = 'select * from contects';
								$result = mysqli_query($db, $sql);
								$i=1;
								while($row = mysqli_fetch_assoc($result)){
									echo '<tr>
									<td>'.$i++.'</td>
									<td>'.$row['fname'].'</td>
									<td>'.$row['number'].'</td>
									<td>'.$row['subject'].'</td>
									<td>'.$row['message'].'</td>
									<td>'.$row['time'].'</td>
									</tr>';
									// <td><a href="contact.php?edit='.$row['sno'].'" onClick="return confirm(\'Are you sure? \');" <h3 style="color: #3066ec;"> Edit</h3></a></td>
									// <td><a href="contact.php?del='.$row['sno'].'" onClick="return confirm(\'Are you sure? \');" <h3 style="color:red;"></h3>Delete</a></td>
											
								}
							?>
					</table>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>  
  