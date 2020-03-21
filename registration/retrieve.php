<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
	<title>National Entrepreneurship Summit | NIT Rourkela</title>
	<link rel="icon" href="../img/nes.png" type="image/gif" sizes="16x16">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<style type="text/css">
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;

		}

		tr:nth-child(even) {
			background-color: white;
		}

	</style>
</head>
<body>
	<?php
	if (mysqli_num_rows($result) > 0) {
		?>
		<table>

			<tr>
				<td>NES ID</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Address</td>
				<td>Phone</td>
				<td>Email id</td>
				<td>Gender</td>
				<td>CA</td>
				<td>Date & time</td>
			</tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
				?>
				<tr>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["username"]; ?></td>
					<td><?php echo $row["college"]; ?></td>
					<td><?php echo $row["address"]; ?></td>
					<td><?php echo $row["contact_number"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["gender"]; ?></td>
					<td><?php echo $row["ca"]; ?></td>
					<td><?php echo $row["time_stamp"]; ?></td>
				</tr>
				<?php
				$i++;
			}
			?>
		</table>
		<?php
	}
	else{
		echo "No result found";
	}
	?>
	<div>
		<p>
			Designed with <i class="fa fa-heart-o" aria-hidden="true"></i> by<a href="mailto: amlanapattnayak@gmail.com"> Amlana Pattnayak</a></p>   	
		</div>
	</body>
	</html>