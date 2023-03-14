<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="icon" href="../../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="../../StyleSheet/Css.css">
</head>
<body>
<?php
include "../dbh.inc.php";

$sid = $_POST["fid"];
if (empty($sid)) {
	?>
	<script >
			window. alert('Invalid data');
			window. location. href='../display.php';
	</script>
	<?php
}
else{
		$sqld = "SELECT * FROM employees WHERE id = $sid ;";
		$result = mysqli_query($conn, $sqld);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<div class="text-center">
					<table class="content-table">
						<thead>
							<tr>
								<th>id</th>
									<th>name</th>
									<th>mobile</th>
									<th>email</th>
									<th>branch</th>
									<th>package</th>
								</tr>
								</thead>
									<tr>
									<td><?php echo $row['id']; ?> </td>
									<td><?php echo $row['Name']; ?> </td>
									<td><?php echo $row['Mobile_no']; ?> </td>
									<td><?php echo $row['email']; ?></span> </td>
									<td><?php echo $row['Branch']; ?> </td>
									<td><?php echo $row['Package']; ?> </td>
									</tr>
					<?php
					}?>
					</tbody>
				</table>
					<a href="../index.php"><button class="home1">Home</button></a>
				</div>
				<?php
			}else{
				?>
				<script LANGUAGE='JavaScript'>
					window. alert('Invalid data');
					window. location. href='../display.php';
				</script>
				<?php
			}
		}?>
</body>
</html>
