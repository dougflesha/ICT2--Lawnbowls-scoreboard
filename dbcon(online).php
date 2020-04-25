<?php  
$servername= "localhost";
$username= "root";
$password="Group002-JCU";
$dbName="id13235039_lawnbowl";
$con= new mysqli($servername,$username,$password,$dbName);
if ($con->connect_error) 
{
	echo "<h2>Sorry We Have Some Problem In The Server</h2>";
}
?>
