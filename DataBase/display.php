<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="icon" href="../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<link rel="stylesheet" href="../StyleSheet/Css.css">
</head>
<body>
<div>
	<div>
		<form class="search text-center mt-2" action="Search/search.php" method="post">
			<input class="isearch" name="fid" type="search" placeholder="Search ID">
			<button class="btn" name="submit" type="submit"> Search </button>
		</form>
		<div  >
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

	$sqld = "SELECT * FROM employees;";
	$result = mysqli_query($conn, $sqld);
	while($row = mysqli_fetch_array($result)){
					?>
						<tr>
						<td><?php echo ($row['id']); ?> </td>
						<td><?php echo ($row['Name']); ?> </td>
						<td><?php echo ($row['Mobile_no']); ?> </td>
						<td><?php echo ($row['email']); ?></span> </td>
						<td><?php echo ($row['Branch']); ?> </td>
						<td><?php echo ($row['Package']); ?> </td>
						</tr>
					<?php
					}?>

				</tbody>
				<a href="index.php"><button class="btn home1">Home</button></a>
			</table>
		</div>
	</div>
</div>
</body>
