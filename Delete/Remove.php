<?php
	include_once "../DataBase/dbh.inc.php";
	$sid = $_POST['id'];
	if (empty($sid)) {
		?>
		<script >
				window. alert('Enter Id');
				window. location. href='RemoveIndex.php';
		</script>
		<?php
	}
	else{

	$fid = mysqli_real_escape_string($conn, $_POST["id"]);
	$sqld = "SELECT * FROM employees WHERE id = $fid;";
	$result = mysqli_query($conn, $sqld);
	$resultCheck = mysqli_num_rows($result);


	if ($resultCheck > 0) {
		$sql = "DELETE FROM employees WHERE id = $fid ;";
		mysqli_query($conn, $sql);
		if (mysqli_query($conn, $sql)) {
			?>
			<script>
				window. alert('Entry deleted successfully');
				window. location. href='RemoveIndex.php';
			</script>
			<?php
		}else{
			?>
			<script>
				window. alert('something went wrong, please try again');
				window. location. href='../DataBase/index.php';
			</script>
			<?php
		}
	}else{
		?>
		<script>
			window. alert('No data found');
			window. location. href='RemoveIndex.php';
		</script>
		<?php
	}

}

?>
