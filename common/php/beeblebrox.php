<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commencement";
$tableLine = "testtable";
$t2line = "teaminc";
// Create connection
try {
	//Collect variables from html pages 
	//Connect to database
	$conn = new mysqli($servername, $username, $password, $dbname);
	
   // echo "Connected successfully<br/>";
	//create querry variable
	$query = 'TRUNCATE TABLE testtable;';
    $query2 = 'TRUNCATE TABLE teaminc;';
	if ($conn->query($query) === TRUE) //Try to send data to database
	{
		//echo "New Record <br/>";
	}
	else 
	{
		//echo "Fail to write";
	}
    if ($conn->query($query2) === TRUE) //Try to send data to database
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
?>