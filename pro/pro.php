<html>
<head>
<style>
body{
background-color:lightblue;
}
#a{
text-align:center;
}
#b{
padding-left:180px;
}
h4{
text-align:center;
font-family:verdana;
}

table,th,td{
border-collapse:collapse;
}
</style>
</head>
<body>
<form action="" method="POST">
<h3 id="a">User Profile</h3>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"user");
$query="SELECT *FROM profile";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
<div style="padding-left:180px">
<?php echo $row['username'];?><br>
<?php echo $row['name']; ?><br>
<?php echo $row['rollno']; ?><br>
<?php echo $row['emailid']; ?><br>
</div>
<?php
}
?>

<br>
<h4>Books Issued</h4>
<center>
<table style="width:75%" border="1">
<tr>
<th style="width:50px">S.no</th>
<th style="width:120px">Book Id</th>
<th>Name</th>
<th style="width:120px">Category</th>
<th style="width:120px">Issued Date</th>
<th style="width:120px">Due Date</th>
<th style="width:120px">Status</th>
</tr>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"user");
$query="SELECT *FROM books";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
<tr>
<td style="height:30px;text-align:center"><?php echo $row['sno']; ?></td>
<td style="text-align:center"><?php echo $row['bookid']; ?></td>
<td style="text-align:center"><?php echo $row['name']; ?></td>
<td style="text-align:center"><?php echo $row['category']; ?></td>
<td style="text-align:center"><?php echo $row['issuedate']; ?></td>
<td style="text-align:center"><?php echo $row['duedate']; ?></td>
<td style="text-align:center"><?php echo $row['status']; ?></td>
</tr>
<?php
}
?>

<tr>
<td style="height:30px"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</center>
</form>
</body>
</html>