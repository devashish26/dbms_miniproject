
    <!DOCTYPE html>
    <html>
    <head>
    	<title>login</title>
      <link rel="icon" href="icon-modified.png">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="StyleSheet/Css.css">

    </head>
    <body>
      <h3 class="title text-center mt-4">EMPLOYEE MANAGEMENT SYSTEM</h3>
    	<hr>

    	<div class="container ">
    		<div class="row">
    			<div class="col-3">
    			</div>
    			<div class="container_register text-center col-6">
    					<form method = "post">
                <br>
    							<input class="N1 text-center" type="text" name="username" placeholder="Username(email)">
    						</br>
    							<input class="M1 text-center" type="password" name="password" placeholder="password">
    						</br>
    							<br>
                <button class="btn" type="submit" name="login">Login</button>
                <br><br>
    					</form>
              <form class="" action="UserLogin/signup.php" method="post">
              </form>
    			</div>
          <div class="col-3">
            <form class="" action="UserLogin/signup.php" method="post">
              <button class="btn home" type="submit" >Sign Up</button>
            </form>
    			</div>
    			</div>
    		</div>
    </body>
    </html>
    <?php
    include_once 'DataBase/dbh.inc.php';

    if(isset($_POST['login'])){


        $susername = $_POST['username'];
        $spassword = $_POST['password'];
        $hashpwd = hash('ripemd160', $spassword);

        $susernameChe = "SELECT EXISTS(SELECT * from users WHERE username = '$susername');";
        $spasswordChe = "SELECT EXISTS(SELECT * from users WHERE password = '$hashpwd');";
    		$result = mysqli_query($conn, $susernameChe);
    		$row = mysqli_fetch_array($result);


        $result1 = mysqli_query($conn, $spasswordChe);
    		$row1 = mysqli_fetch_array($result1);

        if ($row[0] == '1' and $row1[0] == '1') {
          ?>
          <script>
              window. location. href='Database/index.php';
            </script>
          <?php
        }elseif($row[0] !== '1' and $row1[0] == '1'){
            ?>
            <script>
              alert('invalid username');
              window. location. href='index.php';
            </script>
            <?php
        }elseif($row[0] == '1' and $row1[0] !== '1'){
            ?>
            <script>
              alert('incorrect password');
              window. location. href='index.php';
            </script>
            <?php
        }else{
          ?>
          <script>
            alert('user not found');
          </script>
          <?php
        }
}




     ?>
