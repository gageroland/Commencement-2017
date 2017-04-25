<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commencement";
$tableLine = "teaminc";
try {
	$teamOneSize= 0;
    $teamTwoSize= 0;
    $teamThreeSize= 0;
    $teamFourSize= 0;
	$var_team;
	//Connect to database
	$conn = new mysqli($servername, $username, $password, $dbname);
	$query = "SELECT * FROM teaminc";
	$result = mysqli_query($conn, $query) or die('Error querying database.');
	while ($row = mysqli_fetch_array($result)) {
	$var_team = $row['teamCount'];
	//Switch based on team name from database
	switch ($var_team)
	{
	//For each case, add to value of relevant local resource 
	case 'T1':
	$teamOneSize += 1;
	break;
	case 'T2':
	$teamTwoSize += 1;
	break;
	case 'T3':
	$teamThreeSize += 1;
	break;
	case 'T4':
	$teamFourSize += 1;
	break;
	default:
	break;
	}
	}
	//Output data in relevant way so unity application can parse 
	echo "{\"teamOneSize\":".$teamOneSize.",\"teamTwoSize\":".$teamTwoSize.",\"teamThreeSize\":".$teamThreeSize.
	",\"teamFourSize\":".$teamFourSize."}";
	}
	
catch(PDOException $e) //catch connection error
    {
    echo "Connection failed: " . $e->getMessage() . "<br>" . sql;
    }
// Close connection
$conn = null;

?>


