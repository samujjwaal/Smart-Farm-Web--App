
<?php
session_start();
$uname=$_REQUEST['uname'];
$cnum=$_REQUEST['cnum'];
$eid=$_REQUEST['eid'];
$paswd=$_REQUEST['paswd'];

$servername = "localhost";
$dbname = "smart_farm";
$username="root";
$password="";

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
	echo 'conn';
    die("connection failed: " . $conn->connect_error);
} 

$sql =  "INSERT INTO login(`username`, `contact`, `email`, `passwd`) 
VALUES ('$uname','$cnum','$eid','$paswd')";

if (mysqli_query($conn,$sql)) {
    header("location:success.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
