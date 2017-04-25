<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commencement";
$tableLine = "testtable";
try {
	$team0Resource1 = 0;
	$team0Resource2 = 0;
	$team0Resource3 = 0;
	$team0Resource4 = 0;
	$team1Resource1 = 0;
	$team1Resource2 = 0;
	$team1Resource3 = 0;
	$team1Resource4 = 0;
	$team2Resource1 = 0;
	$team2Resource2 = 0;
	$team2Resource3 = 0;
	$team2Resource4 = 0;
	$team3Resource1 = 0;
	$team3Resource2 = 0;
	$team3Resource3 = 0;
	$team3Resource4 = 0;
	$team4Resource1 = 0;
	$team4Resource2 = 0;
	$team4Resource3 = 0;
	$team4Resource4 = 0; 
	//Connect to database
	$conn = new mysqli($servername, $username, $password, $dbname);
	$query = "SELECT * FROM testtable";
	$result = mysqli_query($conn, $query) or die('Error querying database.');
	while ($row = mysqli_fetch_array($result)) {
	$var_team = $row['teamId'];
	$var_object = $row['objectId'];
	//Switch based on team name from database
	switch ($var_team)
	{
	//For each case, add to value of relevant local resource 
	case 'T1':
	if ($var_object === "1"){
		$team1Resource1 += 1;
	}
	else if ($var_object === "2"){
		$team1Resource2 += 1;
	}
	else if ($var_object === "3"){
		$team1Resource3 += 1;
	}
	else if ($var_object === "4"){
		$team1Resource4 += 1;
	}
	break;
	case 'T2':
	if ($var_object === "1"){
		$team2Resource1 += 1;
	}
	else if ($var_object === "2"){
		$team2Resource2 += 1;
	}
	else if ($var_object === "3"){
		$team2Resource3 += 1;
	}
	else if ($var_object === "4"){
		$team2Resource4 += 1;
	}
	break;
	case 'T3':
	if ($var_object === "1"){
		$team3Resource1 += 1;
	}
	else if ($var_object === "2"){
		$team3Resource2 += 1;
	}
	else if ($var_object === "3"){
		$team3Resource3 += 1;
	}
	else if ($var_object === "4"){
		$team3Resource4 += 1;
	}
	break;
	case 'T4':
	if ($var_object === "1"){
		$team4Resource1 += 1;
	}
	else if ($var_object === "2"){
		$team4Resource2 += 1;
	}
	else if ($var_object === "3"){
		$team4Resource3 += 1;
	}
	else if ($var_object === "4"){
		$team4Resource4 += 1;
	}
	break;
	default:
	break;
	}
	if ($var_object === "1"){
		$team0Resource1 += 1;
	}
	else if ($var_object === "2"){
		$team0Resource2 += 1;
	}
	else if ($var_object === "3"){
		$team0Resource3 += 1;
	}
	else if ($var_object === "4"){
		$team0Resource4 += 1;
	}
	}
	//Output data in relevant way so unity application can parse 
	echo "{\"team0Resource1\":".$team0Resource1.",\"team0Resource2\":".$team0Resource2.",\"team0Resource3\":".$team0Resource3.",\"team0Resource4\":".$team0Resource4.","
	."\"team1Resource1\":".$team1Resource1.",\"team1Resource2\":".$team1Resource2.",\"team1Resource3\":".$team1Resource3.",\"team1Resource4\":".$team1Resource4.","
	."\"team2Resource1\":".$team2Resource1.",\"team2Resource2\":".$team2Resource2.",\"team2Resource3\":".$team2Resource3.",\"team2Resource4\":".$team2Resource4.","
	."\"team3Resource1\":".$team3Resource1.",\"team3Resource2\":".$team3Resource2.",\"team3Resource3\":".$team3Resource3.",\"team3Resource4\":".$team3Resource4."," 
."\"team4Resource1\":".$team4Resource1.",\"team4Resource2\":".$team4Resource2.",\"team4Resource3\":".$team4Resource3.",\"team4Resource4\":".$team4Resource4."}";
	}
	
catch(PDOException $e) //catch connection error
    {
    echo "Connection failed: " . $e->getMessage() . "<br>" . sql;
    }
// Close connection
$conn = null;

?>


