<?php
	echo "Hello World";
	echo "Hello World";
	//$pretstmt = "SELECT * from testtable";
	
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,'commencement');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//Step2
$query = "SELECT * FROM testtable";
$result = mysqli_query($conn, $query) or die('Error querying database.');
//echo $result;
//echo $row['fname'] . ' ' . $row['lname'] <br />;
//Step3
//$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
//echo $row['fName'];
//while ($row = mysqli_fetch_array($result)) {
echo $row['fName'] . ' ' . $row['lName'] . "<br />";//}
?>


