<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="icon" href="../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../StyleSheet/Css.css">

</head>
<body>
	<div class="container ">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="box container_register col-6">

					<form action="" method = "post">

							<input class="N1 text-center" type="text" name="fname" placeholder="Full Name">
						</br>
							<input class="E1 text-center" type="email" name="femail" placeholder="E-mail">
						</br>
							<input class="M1 text-center" type="number" name="fmobile" placeholder="Contact Number">
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
							<input class="P1 text-center" type="number" name="fpackage" placeholder="Package Amount">
							<br><button class="btn register" type="submit" name="submit">Register</button>
					</form>
				</div>
				<div class="col-3">
					<a href="../DataBase/index.php"><button class="btn home">Home</button></a>
				</div>
			</div>
		</div>
</body>
</html>

<?php
	include_once '../DataBase/dbh.inc.php';

	if(isset($_POST['submit'])){

		$sname = $_POST['fname'];
		$smobile = $_POST['fmobile'];
		$semail = $_POST['femail'];
		$sbranch = $_POST['fbranch'];
		if($sbranch == false){
			?>
			<script>
				window. alert('Invalid data');
				window. location. href='Register.php';
			</script>
			<?php
		}
		$spackage = $_POST['fpackage'];


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

    $mailChe = "SELECT EXISTS(SELECT * from employees WHERE email = '$semail');";
		$result = mysqli_query($conn, $mailChe);
		$row = mysqli_fetch_array($result);


		$mobileChe = "SELECT EXISTS(SELECT * from employees WHERE Mobile_no = '$smobile');";
		$result1 = mysqli_query($conn, $mobileChe);
		$row1 = mysqli_fetch_array($result1);

		if ($row[0] == '1') {
			?>
			<script>
				alert('email already exist');
			</script>
			<?php
		}
		elseif ($row1[0] == '1') {
				?>
				<script>
					alert('Mobile number already exist');
				</script>
				<?php
		}else{

					$sql = "INSERT INTO employees( Name,Mobile_no,email,Branch,Package) VALUES ('$sname','$smobile','$semail','$sbranch','$spackage') ;";
					$che =  mysqli_query($conn,$sql);

					if($che){
						?>
						<script>
							alert("Employee Registered")
						</script>
						<?php
					}else{
						?>
						<script>
						window. alert('Invalid data');
						window. location. href='Register.php';
					</script>
				<?php
			}
		}
}
}

?>
