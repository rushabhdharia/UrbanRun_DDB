<?php
include_once 'dbconnect.php';
$query1 = "SELECT * FROM tbl_emp PARTITION (pWest)";
$result1=mysqli_query($conn,$query1);

$query2 = "SELECT * FROM tbl_emp PARTITION (pNorth)";
$result2=mysqli_query($conn,$query2);

$query3 = "SELECT * FROM tbl_emp PARTITION (pEast)";
$result3=mysqli_query($conn,$query3);

$query4 = "SELECT * FROM tbl_emp PARTITION (pSouth)";
$result4=mysqli_query($conn,$query4);
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<title>Employee Regions</title>
</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container">
		<table class="table table-hover">
			<caption>Employee West</caption>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Skills</th>
				<th>State</th>
				<th>City</th>
				<th>Zip Code</th>
				<th>Ratings</th>
				<th>Cost per hour</th>
			</tr>
			<?php
			while ($rows = mysqli_fetch_assoc($result1)) {
				echo "<tr>
				<td>".$rows['empId']."</td>
				<td>".$rows['name']."</td>
				<td>".$rows['skills']."</td>
				<td>".$rows['state']."</td>
				<td>".$rows['city']."</td>
				<td>".$rows['zip']."</td>
				<td>".$rows['ratings']."</td>
				<td>".$rows['costph']."</td>
				</tr>";
			}
		?>
		</table>

		<table class="table table-hover">
			<caption>Employee North</caption>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Skills</th>
				<th>State</th>
				<th>City</th>
				<th>Zip Code</th>
				<th>Ratings</th>
				<th>Cost per hour</th>
			</tr>
			<?php
			while ($rows = mysqli_fetch_assoc($result2)) {
				echo "<tr>
				<td>".$rows['empId']."</td>
				<td>".$rows['name']."</td>
				<td>".$rows['skills']."</td>
				<td>".$rows['state']."</td>
				<td>".$rows['city']."</td>
				<td>".$rows['zip']."</td>
				<td>".$rows['ratings']."</td>
				<td>".$rows['costph']."</td>
				</tr>";
			}
		?>
		</table>

		<table class="table table-hover">
			<caption>Employee East</caption>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Skills</th>
				<th>State</th>
				<th>City</th>
				<th>Zip Code</th>
				<th>Ratings</th>
				<th>Cost per hour</th>
			</tr>
			<?php
			while ($rows = mysqli_fetch_assoc($result3)) {
				echo "<tr>
				<td>".$rows['empId']."</td>
				<td>".$rows['name']."</td>
				<td>".$rows['skills']."</td>
				<td>".$rows['state']."</td>
				<td>".$rows['city']."</td>
				<td>".$rows['zip']."</td>
				<td>".$rows['ratings']."</td>
				<td>".$rows['costph']."</td>
				</tr>";
			}
		?>
		</table>

		<table class="table table-hover">
			<caption>Employee South</caption>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Skills</th>
				<th>State</th>
				<th>City</th>
				<th>Zip Code</th>
				<th>Ratings</th>
				<th>Cost per hour</th>
			</tr>
			<?php
			while ($rows = mysqli_fetch_assoc($result4)) {
				echo "<tr>
				<td>".$rows['empId']."</td>
				<td>".$rows['name']."</td>
				<td>".$rows['skills']."</td>
				<td>".$rows['state']."</td>
				<td>".$rows['city']."</td>
				<td>".$rows['zip']."</td>
				<td>".$rows['ratings']."</td>
				<td>".$rows['costph']."</td>
				</tr>";
			}
		?>
		</table>
		
	</div>
	<?php include 'footer.php';?>
</body>
</html>