<?php 
	if (isset($_POST['Sub'])){
		$Server = "localhost";
		$username = "root";
		$password = "";

		$con = mysqli_connect($Server, $username, $password);

		if (!$con) {
			die("connection to this database failed due to" . mysqli_connect_error());
		}
		//echo "success connecting to db";

		$message = $_POST['Message'];
		$name = $_POST['subject'];
		$email = $_POST['toEmail'];

		$sql = "INSERT INTO `websiteumar1`.`contactpage` (`message`, `name`, `email`, `date`) VALUES ('$message', '$name', '$email', 'current_timestamp()');";
		//echo "$sql";

		if ($con->query($sql) == true) {
			echo "Inserted";
		}
		else{
			echo "ERROR: $sql <br> $con->error";
		}

		$con->close();
	}
?>