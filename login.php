<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "smart_farm";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$username = $_POST['uname'];
	$password = $_POST['paswd'];
    $_SESSION['USER']=$username;
	$_SESSION['loggedin'] = true;
	$sql = "SELECT passwd FROM login WHERE username='$username'";
	$result = $conn->query($sql);
	
	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		
		if($row["passwd"] == $password)
		{
			header("location:index.php");
		}
		else
		{
			header("location:fail.html");
		}
	}
	

?>