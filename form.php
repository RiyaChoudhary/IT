<?php
session_start();
include("db.php");
$sec=$_SESSION['sess_sec'];
echo $sec;
$query = mysqli_query($dbh, "SELECT * FROM candidate where section='$sec'") or die("error connecting");
echo '<form id="demo" >';
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
	echo '<input type="radio" id="option1" name="rad" value='.$row['c_id'].'>'.$row['c_id'].'---'.$row['name'].'</input><br />';
echo '</form>';
?>



