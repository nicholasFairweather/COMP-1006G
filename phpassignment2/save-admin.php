<?php
	require_once './inc/database.php';

	$first_name = $_POST['firstName'];
	$last_name = $_POST['lastName'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];

	$ok = true;
	//header
	include './inc/header.php';
	if(empty($first_name)){
		$ok = false;
		echo '<p>this feild cannot be empty</p>';
	}
	if(empty($last_name)){
		$ok = false;
		echo '<p>this feild cannot be empty</p>';
	}
	if(empty($username)){
		$ok = false;
		echo '<p>this feild cannot be empty</p>';
	}
	if((empty($password)) || ($password != $confirm)){
		$ok = false;
		echo '<p>Password invalid</p>';
	}
	if ($ok){

		$password = hash('sha512', $password);

		$sql = "INSERT INTO phpUsers (firstName, lastName, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";
		$conn->exec($sql);
		echo "<section class='successRow'>";
			echo "<div>";
				echo "<h3>User Saved</h3>";
			echo "</div>";
		echo "</section>";
		$conn = null;
	}
	?>
	<section class="row successBackRow">
		<div>
			<p>click the button below to head to the login page</p>
			<a href="login.php" class="btn btnPrimary">Sign In</a>
		</div>
	</section>
<?php require './inc/footer.php'; ?>
