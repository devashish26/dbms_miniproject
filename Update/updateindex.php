<!DOCTYPE html>
<html>
<head>
	<title>Update data</title>
	<link rel="icon" href="../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../StyleSheet/Css.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="container_register col-6">
				<h4 class="in text-center "> Insert the Data To be Updated</h4>
					<form action="findupdate.php" method="post">

							<input class="N1 text-center" type="text" name="fname" placeholder="Name">
						</br>
							<input class="E1 text-center" type="email" name="femail" placeholder="email">
						</br>
							<input class="M1 text-center" type="number" name="fmobile" placeholder="mobile number">
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

							<input class="P1 text-center" type="number" name="fpackage" placeholder="package">
							<br>
						<button class=" register btn">Update</button>
					</form>
					</div>
					<div class="col-3">
						<a href="../DataBase/index.php"><button class="home btn">Home</button></a>
					</div></div></div>












</body>
</html>
