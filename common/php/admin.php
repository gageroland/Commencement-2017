<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commencement";
$tableLine = "testtable";
// Create connection
try {
	//Collect variables from html pages 
	$var_team = $_GET['team'];
	$var_object = $_GET['object'];
	//Connect to database
	$conn = new mysqli($servername, $username, $password, $dbname);
	
   // echo "Connected successfully<br/>";
	//create querry variable
	$query = "INSERT INTO testtable (teamId, objectId) VALUES('$var_team', '$var_object')";

	if ($conn->query($query) === TRUE) //Try to send data to database
	{
		//echo "New Record <br/>";
	}
	else 
	{
		//echo "Fail to write";
	}

	}

catch(PDOException $e) //catch connection error
    {
    echo "Connection failed: " . $e->getMessage() . "<br>" . sql;
    }
// Close connection
$conn = null;
//Recurse to page data was submitted from 
header( 'Location: http://grad.uat2017.com/admin.html' ) ;
?>