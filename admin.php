<html>
	<head>
		<?php
	session_start();
	include('db.php');
	$query1="select * from candidate where section=1 and cgpa>6.5 order by count desc;";
	$result1=mysqli_query($dbh,$query1);
	$query2="select * from candidate where section=2 and cgpa>6.5 order by count desc;";
	$result2=mysqli_query($dbh,$query2);	
	$query3="select * from candidate where section=3 and cgpa>6.5 order by count desc;";
	$result3=mysqli_query($dbh,$query3);	
?>
	<style>
		.table{
			float:left;
			margin-right:10px;
		}
		.tab{
			//float: left;
			margin-left:32%;
			width:100%;
		}
	</style>
	</head>
	<body>
	

		<center><h2>Welcome, Admin</h2></center>
<div class="tab"><table class="table" border=1px rules="all">
		<tr>
				<th colspan="2">Section 1</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>Vote</th>
		</tr>
		<?php while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC)){ ?>
		<tr>
			<td><?php echo $row1['name']; ?></td>
			<td><?php echo $row1['count']; ?></td>
		<?php } ?>
		</tr>
		</table>


		<table class="table" border=1px rules="all">
		<tr>
				<th colspan="2">Section 2</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>Vote</th>
		</tr>
		<?php while($row2=mysqli_fetch_array($result2,MYSQLI_ASSOC)){ ?>
		<tr>
			<td><?php echo $row2['name']; ?></td>
			<td><?php echo $row2['count']; ?></td>
		</tr>
			<?php } ?>
		</table>
		<table border=1px rules="all">
		<tr>
				<th colspan="2">Section 3</th>
		</tr>
		<tr>
			<th>Candidate</th>
			<th>Vote</th>
		</tr>
		<?php while($row3=mysqli_fetch_array($result3,MYSQLI_ASSOC)){ ?>
		<tr>
			<td><?php echo $row3['name']; ?></td>
			<td><?php echo $row3['count']; ?></td>
		</tr>
			<?php } ?>
		</table>
		
</div>
<center>
<form action="stop.php" method="post">
	<input style="margin-top:50px;" type="submit" value="Stop Voting"/>
</form>
</center>

	</body>
</html>		
