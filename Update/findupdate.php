<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="icon" href="../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="../StyleSheet/Css.css">
</head>
<body>
	<?php
		include "../DataBase/dbh.inc.php";
		$sname = mysqli_real_escape_string($conn, $_POST["fname"]);
		$semail = mysqli_real_escape_string($conn, $_POST["femail"]);
		$smobile = mysqli_real_escape_string($conn, $_POST["fmobile"]);
		$sbranch = mysqli_real_escape_string($conn, $_POST["fbranch"]);
		if($sbranch == false){
			?>
			<script>
				window. alert('Invalid data');
				window. location. href='updateindex.php';
			</script>
			<?php
		}
		$spackage = mysqli_real_escape_string($conn, $_POST["fpackage"]);

		if(empty($sname)){
			?>
			<script>
				alert('Enter Data');
				window. location. href='updateindex.php';
			</script>

			<?php
		}

		elseif(strlen($sname) <3){
			?>
			<script>
				alert('Name Too Short');
				window. location. href='updateindex.php';
			</script>

			<?php
		}

		elseif(strpos($sname, '0') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '1') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '2') == true){
			?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '3') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '4') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '5') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '6') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '7') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '8') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		elseif(strpos($sname, '9') == true){
		?>
			<script>
				alert('Enter Valid Name');
				window. location. href='updateindex.php';
			</script>

			<?php
		}




		elseif(strlen($smobile) <=9){
			?>
			<script>
				alert('Enter Valid Number');
				window. location. href='updateindex.php';
			</script>

			<?php
		}

		elseif(strlen($smobile) >=11){
			?>
			<script>
				alert('Enter Valid Number');
				window. location. href='updateindex.php';
			</script>

			<?php
		}

		elseif(empty($smobile)){
		?>
			<script>
				alert('Enter Number');
				window. location. href='updateindex.php';
			</script>

			<?php
		}



		elseif($spackage == "" ){
			?>
			<script>
				alert('Enter Package');
				window. location. href='updateindex.php';
			</script>

			<?php
		}
		else{
			?>
	<div>
		<div>
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
		$sqld = "SELECT * FROM employees WHERE Name = '$sname'AND email = '$semail'AND Mobile_no = $smobile AND Branch = '$sbranch' AND Package = $spackage;";
		$result = mysqli_query($conn, $sqld);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<p style='position:relative; left:1.5em; top:4em; font-size: 1.5em;'>"."The data you want to edit: <br>";
						?>
						<tr>
								<td><?php echo $row['id']; ?> </td>
								<td><?php echo $row['Name']; ?> </td>
								<td><?php echo $row['Mobile_no']; ?> </td>
								<td><?php echo $row['email']; ?></span> </td>
								<td><?php echo $row['Branch']; ?> </td>
								<td><?php echo $row['Package']; ?> </td>
						</tr>
						</tbody>
						<a href="../DataBase/index.php"><button class="home1 btn">Home</button></a></table></div>

					<?php
				}

			echo "<br>" . "<br>" ."<p style='position:relative; margin:3em; '> ". "Do you want to Edit:";
			?>

			<form class="fupdate" action="updatephp.php" method="post">

				<button class="yes btn" type="submit" name="submit">Yes</button>
			</form>
			<form action="../DataBase/index.php">
				<button class="no btn" type="submit" name="submit">No</button>
			</form>
			<?php
			}
		else{
			?>
			<script>
				window. alert('Invalid data');
				window. location. href='updateindex.php';
			</script>
			<?php
		}
	}?>
</div>
</body>
</html>
