<!DOCTYPE html>
<html>
<head>
	<title>Remove Entry</title>
	<link rel="icon" href="../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../StyleSheet/Css.css">
</head>
<body>
	<div class="container container_register col-6 text-center">
		<br>
		<form action="Remove.php" method="post">
			<input class="N1 text-center" type="number" name="id" placeholder="Enter ID">
			<button class="delete1 btn" type="submit" name="submit">Remove</button>
		</form>
		<a href="../DataBase/index.php"><button class="home1 btn">Home</button></a>	<br>

		<form action="../DataBase/DisplayEntry.php" method="post">
			<input class="E1 text-center" type="number" name="id2" placeholder="Enter ID">
			<button class="viewdata btn" type="submit" name="submit">View Entry</button>
		</form>
		<br><br><br><br>
		<a href="../DataBase/Search/FindIndex.php"><button class="fid btn" >Find ID</button></a>
			<br><br>
	</div>


</body>
</html>
