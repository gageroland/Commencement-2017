<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commencement";
$tableLine = "teaminc";
// Create connection
try {
	//Collect variables from html pages 
	$var_team_total = $_GET['team'];
	//Connect to database
	$conn = new mysqli($servername, $username, $password, $dbname);
	echo $var_team_total;
   // echo "Connected successfully<br/>";
	//create querry variable
	$query = "INSERT INTO teaminc (teamCount) VALUES('$var_team_total')";
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
switch ($var_team_total)
{
	//Make sure to replace localhost in following addresess with the current static ip of this machine
	case 'T1':
	header( 'Location: http://grad.uat2017.com/teams/teamone.html' ) ;
	break;
	case 'T2':
	header( 'Location: http://grad.uat2017.com/teams/teamtwo.html' ) ;
	break;
	case 'T3':
	header( 'Location: http://grad.uat2017.com/teams/teamthree.html' ) ;
	break;
	case 'T4':
	header( 'Location: http://grad.uat2017.com/teams/teamfour.html' ) ;
	break;
	default:
	header( 'Location: http://grad.uat2017.com/index.html' ) ;
	break;
}
?>