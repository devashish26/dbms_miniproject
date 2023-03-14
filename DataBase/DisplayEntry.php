<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="icon" href="../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="../StyleSheet/Css.css">
</head>
<body>
	<?php
	$sid = $_POST['id2'];
	if (empty($sid)) {
		?>
		<script >
				window. alert('Enter Id2');
				window. location. href='../Delete/RemoveIndex.php';
		</script>
		<?php
	}
	else{
	 ?>
	<div >

		<div >
			<div >
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

					<tbody>
	<?php
		include_once "dbh.inc.php";
		$fid = mysqli_real_escape_string($conn, $_POST["id2"]);
		$sqld = "SELECT * FROM employees WHERE id = $fid;";
		$result = mysqli_query($conn, $sqld);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck && $result) {
			while($resultCheck = mysqli_fetch_array($result)){
						?>
							<tr>
							<td><?php echo $resultCheck['id']; ?> </td>
							<td><?php echo $resultCheck['Name']; ?> </td>
							<td><?php echo $resultCheck['Mobile_no']; ?> </td>
							<td><span class="email-style"><?php echo $resultCheck['email']; ?></span> </td>
							<td><?php echo $resultCheck['Branch']; ?> </td>
							<td><?php echo $resultCheck['Package']; ?> </td>
						<?php
						}
		}else{
			?>
			<script>
					window. alert('something went wrong, please try again');
					window. location. href='index.php';
			</script>
			<?php
		}?>

		</tr>
		</tbody>
		<div class="">
			<a href="index.php"><button class="btn home">Home</button></a>
		</div>
		</table>
		</div>
		</div>
	</div><?php
}?>
</body>
</html>
