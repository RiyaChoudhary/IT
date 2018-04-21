<?php
session_start();
include("db.php");
if(isset($_POST["submit"])){
if(!empty($_POST["username"]) && !empty($_POST["password"])){
$username=$_POST["username"];
$password=$_POST["password"];
$query = mysqli_query($dbh, "SELECT * FROM login WHERE name='$username'");
$row= mysqli_fetch_array($query,MYSQLI_ASSOC);

if($row['password']==$password)
{
$_SESSION['sess_sec']=$row['section'];
$_SESSION['user']=$username;
header("Location:index.html");
}
else {
echo "Invalid username or password";
}}

else
{
echo "invalid";
}
}

?>

