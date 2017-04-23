<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commencement";
$tableLine = "teaminc";
// Create connection
try {
	//Collect variables from html pages
	$var_team_total = $_GET['teamCount'];
	//Connect to database
	$conn = new mysqli($servername, $username, $password, $dbname);

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
switch ($var_team)
{
	//Make sure to replace localhost in following addresess with the current static ip of this machine
	case 'T1':
	header( 'Location: http://192.168.1.224/commencement/teams/teamConfirm1.html' ) ;
	break;
	case 'T2':
	header( 'Location: http://192.168.1.224/commencement/teams/teamConfirm2.html' ) ;
	break;
	case 'T3':
	header( 'Location: http://192.168.1.224/commencement/teams/teamConfirm3.html' ) ;
	break;
	case 'T4':
	header( 'Location: http://192.168.1.224/commencement/teams/teamConfirm4.html' ) ;
	break;
	default:
	header( 'Location: http://192.168.1.224/commencement/index.html' ) ;
	break;
}
?>
