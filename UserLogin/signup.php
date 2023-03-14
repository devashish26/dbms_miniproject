<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="icon" href="../icon-modified.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../StyleSheet/Css.css">

</head>
<body>
	<h3 class="title text-center mt-4">EMPLOYEE MANAGEMENT SYSTEM</h3>
	<hr>
	<div class="container ">
		<div class="row">
      <div class="col-3">
        </div>

			<div class="container_register col-6">
					<form action="" method = "post">
						<br>
							<input class="N1 text-center" type="text" name="username" placeholder="Username(email)">
						</br>
							<input class="M1 text-center" type="password" name="password" placeholder="password">
						</br>
							<input class="M1 text-center" type="password" name="passwordCheck" placeholder="confirm password">
						</br>
							<br>
            <button class="register btn" type="submit" name="login">sign up</button>
					</form>
				</div>
        <div class="col-3">
            <a href = '../index.php'><button class = 'home btn'>Home</button></a>
          </div>
			</div>
		</div>
</body>
</html>
<?php
	include_once '../DataBase/dbh.inc.php';

	if(isset($_POST['login'])){

		$susername = $_POST['username'];
    $spassword = $_POST['password'];
    $spasswordCheck = $_POST['passwordCheck'];


    $susernameChe = "SELECT EXISTS(SELECT * from users WHERE username = '$susername');";
		$result1 = mysqli_query($conn, $susernameChe);
		$row1 = mysqli_fetch_array($result1);


    if (strlen($spassword) < 8) {
      ?>
      <script>
        alert("password must contain 8 characters");
      </script>
      <?php
    }
	  elseif ($row1[0] == '1') {
				?>
				<script>
					alert('username already exist');
				</script>
				<?php
		}elseif ($spassword !== $spasswordCheck) {
      ?>
      <script>
        alert('passwords don\'t match');
      </script>
      <?php
    }elseif ($susername == $spassword) {
      ?>
      <script>
        alert('usename and password can\'t be same');
      </script>
      <?php
    }
    else{
        $hashpwd = hash('ripemd160', $spassword);
        $sql = "INSERT INTO users(username, password) VALUES('$susername', '$hashpwd') ";
        $che =  mysqli_query($conn,$sql);

        if($che){
          ?>
          <script>
            alert("Registered")
          </script>
          <?php
        }else{
          ?>
          <script>
          window. alert('Try again');
          window. location. href='index.php';
        </script>
      <?php
    }
}
		}
