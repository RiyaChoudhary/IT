<?php
session_start();
include('db.php');
echo "update page";
$name=$_GET['q'];
$u=$_SESSION['user'];
$query="update candidate set count=count+1 where name=\"$name\"";
mysqli_query($dbh,$query) or die("error querying");
$que="update login set voted=1 where name=\"$u\"";
mysqli_query($dbh,$que) or die("error querying");
?>
