<!DOCTYPE html>
<?php 	include "../dbh.inc.php"; ?>
<html>
<head>
	<title> Find</title>
	<link rel="icon" href="../../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="../../StyleSheet/Css.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="container_register col-6">
					<form action="" method = "post">

							<input class="N1 text-center" type="text" name="fname" placeholder="Full Name">
						</br>
							<input class="E1 text-center" type="text" name="femail" placeholder="E-mail">
						</br>
							<input class="M1 text-center" type="number" name="fmobile" placeholder="Mobile Number">
						</br>
							<select class="B1 text-center" name="fbranch">
								<option value = "" disabled selected >Branch</option>
								<option value="Security">Security</option>
								<option value="IT">IT</option>
								<option value="Database Engg">Database Engg</option>
								<option value="HR">HR</option>
								<option value="Management">Management</option>
							</select>
						</br>

							<input class="P1 text-center" type="number" name="fpackage" placeholder="Package Amount">
						<br>
						<button class="btn register" type="submit" name="submit">Find</button>
						<br><br>
					</form>

			</div>
			<div class="col-3">
				<a href="../index.php"><button class="btn home">Home</button></a>
			</div>
</body>
</html>

 <?php
if(isset($_POST["submit"])){

	$sname = mysqli_real_escape_string($conn, $_POST["fname"]);
	$semail = mysqli_real_escape_string($conn, $_POST["femail"]);
	$smobile = mysqli_real_escape_string($conn, $_POST["fmobile"]);
	$sbranch = mysqli_real_escape_string($conn, $_POST["fbranch"]);
	if($sbranch == false){
		?>
		<script>
			window. alert('Invalid data');
			window. location. href='FindIndex.php';
		</script>
		<?php
	}
	$spackage = mysqli_real_escape_string($conn, $_POST["fpackage"]);

	if(empty($sname)){
		?>
		<script>
			alert('Enter Data');
		</script>

		<?php
	}

	elseif(strlen($sname) <3){
		?>
		<script>
			alert('Name Too Short');
		</script>

		<?php
	}

	elseif(strpos($sname, '0') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '1') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '2') == true){
		?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '3') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '4') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '5') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '6') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '7') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '8') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}
	elseif(strpos($sname, '9') == true){
	?>
		<script>
			alert('Enter Valid Name');
		</script>

		<?php
	}


	elseif(strpos($semail, '@') == false or strpos($semail, '.com') == false ){
	?>
		<script>
			alert('Enter Valid1 Mail');
		</script>

		<?php
	}



	elseif(strlen($smobile) <=9){
		?>
		<script>
			alert('Enter Valid Number');
		</script>

		<?php
	}

	elseif(strlen($smobile) >=11){
		?>
		<script>
			alert('Enter Valid Number');
		</script>

		<?php
	}

	elseif(empty($smobile)){
	?>
		<script>
			alert('Enter Number');
		</script>

		<?php
	}

	elseif($spackage == "" ){
		?>
		<script>
			alert('Enter Package');
		</script>

		<?php
	}
	else{

			$sqld = "SELECT * FROM employees WHERE Name = '$sname'AND email = '$semail'AND Mobile_No = $smobile AND Branch = '$sbranch' AND Package = $spackage;";
			$result = mysqli_query($conn, $sqld);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<p style='color:#161F6D ;font-family:cursive; font-weight:900 ; font-size:20px; position:relative; '> Your ID is:</p>". "<p style='color:#161F6D; font-weight= 900; font-size:20px; font-family:cursive; position:relative; '>". $row["id"] . "<br>";
				}
			}else{
				?>
				<script>
				window. alert('Invalid data3');
				window. location. href='findindex.php';
			</script>
				<?php
			}}}

?>
