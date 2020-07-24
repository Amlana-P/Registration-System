<?php
include_once 'server.php';
$result = mysqli_query($db,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
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
				<td>USER ID</td>
				<td>Name</td>
				<td>E-mail</td>
				<td>Date & time</td>
			</tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
				?>
				<tr>
					<td><?php echo $row["user_id"]; ?></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["timestamp"]; ?></td>
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
	</body>
	</html>