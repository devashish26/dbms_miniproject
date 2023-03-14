<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="icon" href="../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="../StyleSheet/Css.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="container_register col-6">
				<h4 class="in" >Insert New Data</h4>
						<form action="" method="post">

							<input class="N1 text-center" type="number" name="fid" placeholder="id*">
							</br>
							<input class="N1 text-center" type="text" name="fname" placeholder="new Name">
						</br>
							<input class="E1 text-center" type="text" name="femail" placeholder="new email">
						</br>
							<input class="M1 text-center" type="number" name="fmobile" placeholder="new mobile">

						</br>

							<select class="B1 text-center" name="fbranch">
								<option value = "" disabled selected>Branch</option>
								<option value="Security">Security</option>
								<option value="IT">IT</option>
								<option value="Database Engg">Database Engg</option>
								<option value="HR">HR</option>
								<option value="Management">Management</option>
							</select>
						</br>

							<input class="P1 text-center" type="number" name="fpackage" placeholder="new package">
						</br>
							<button class="btn register" name="up">Update</button>
						</form>
					</div>
						<div class="col-3">
							<a href="../DataBase/index.php"><button class="btn home">Home</button></a>

						</div>
		</div>
	</div>

<?php


	if(isset($_POST['up'])){
		include_once "../DataBase/dbh.inc.php";

		$sid = mysqli_real_escape_string($conn, $_POST["fid"]);
		$sname = mysqli_real_escape_string($conn, $_POST["fname"]);
		$semail = mysqli_real_escape_string($conn, $_POST["femail"]);
		$smobile = mysqli_real_escape_string($conn, $_POST["fmobile"]);
		$sbranch = mysqli_real_escape_string($conn, $_POST["fbranch"]);
		if($sbranch == false){
			?>
			<script>
				window. alert('Invalid data');
				window. location. href='updatephp.php';
			</script>
			<?php
		}
		$spackage = mysqli_real_escape_string($conn, $_POST["fpackage"]);


	if (empty($sid)) {
		?>
		<script>
			alert('Enter ID');
		</script>

		<?php
	}


	elseif(empty($sname)){
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

		$mailChe = "SELECT email, COUNT(email)
								FROM employees
								GROUP BY email
								HAVING COUNT(email)>=1";
		$result = mysqli_query($conn, $mailChe);
		$row = mysqli_fetch_assoc($result);
		$key = array_search('2', $row);

		$mobileChe = "SELECT Mobile_no, COUNT(Mobile_no)
								FROM employees
								GROUP BY Mobile_no
								HAVING COUNT(Mobile_no)>=1";
		$result1 = mysqli_query($conn, $smobile);
		$row1 = mysqli_fetch_assoc($result1);
		$key1 = array_search('2', $row1);

		if ($key1 == $smobile) {
			?>
			<script>
				alert("Mobile is taken");
			</script>
			<?php
		}

		elseif ($key == $semail) {?>
			<script>
				alert("Email is taken");
			</script>
			<?php
		}


		else{

			$sql = "UPDATE employees SET Name='$sname',email='$semail', Mobile_no=$smobile, Branch='$sbranch',Package=$spackage WHERE id = $sid;";
			$che =  mysqli_query($conn,$sql);

				if($che){
					?>
					<script>
						alert("Update Successfully");
						window. location. href='../DataBase/index.php';
					</script>
					<?php
				}
				else{
					?>
					<script>
						window. alert('Invalid data3');
						window. location. href='updatephp.php';
					</script>
					<?php
				}}}}?>
</body>
</html>
