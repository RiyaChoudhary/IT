<html>
<body>
<center>
<h1> REGISTRATION</h1>
<br><br>
</center>
<form method="post" action="">
<center>
Name:  <input type="text" size="10" maxlength="40" name="candname" required></br>
Id no: <input type="text" size="10" maxlength="40" name="candid" required></br>
Section: <input type="text" size="10" maxlength="40" name="sec" required></br>
CGPA:  <input type="text" size="10" maxlength="40" name="cgpa" required></br>
	   <button type="submit" value="register" name="submit">register</button>
</center>
</form> 
<?php
include("db.php");
if(isset($_POST["submit"])){
$name=$_POST["candname"];
$id=$_POST["candid"];
$sec=$_POST["sec"];
$cgpa=$_POST["cgpa"];
$query = mysqli_query($dbh,"insert into candidate(c_id,name,section,cgpa,count) values ('$id','$name','$sec','$cgpa',0)" )or die("Error adding");
echo "added";
}

?>
</body>
</html>
