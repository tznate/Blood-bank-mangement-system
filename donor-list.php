<?php
include('connection.php');
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
    td{
    width: 200px;
    height:40px;}
</style>
</head>
<body>
    <div id="full">
        <div id="inner_full"><div id="header"><h2><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management System</a></h2></div>
<div id="body">
<br>
<?php
echo $un=$_SESSION['un'];
if(!$un)
{
header("Location:index.php");
}
?>
<h1>Donor Registration</h1><br> <br>
<center><div id="form">
<table>
<tr>
<td><center><b><font color="blue">Name</font></b></center></td>
<td><center><b><font color="blue">Father's Name</font></b></center></td>
<td><center><b><font color="blue">Address</b></font></center></td>
<td><center><b><font color="blue">City</font></b></center></td>
<td><center><b><font color="blue">Age</font></b></center></td>
<td><center><b><font color="blue">Blood Group</font></b></center></td>
<td><center><b><font color="blue">Mobile No</font></b></center></td>
<td><center><b><font color="blue">E-Mail</font></b></center></td>
</tr>
<?php
$q=$db->query("SELECT * FROM donor_registration");
while($r1=$q->fetch(PDO :: FETCH_OBJ))
{
?>
<tr>
<td><center><?= $r1->name; ?></center></td>
<td><center><?= $r1->fname; ?></center></td>
<td><center><?= $r1->address; ?></center></td>
<td><center><?= $r1->city; ?></center></td>
<td><center><?= $r1->age; ?></center></td>
<td><center><?= $r1->bgroup; ?></center></td>
<td><center><?= $r1->mno; ?></center></td>
<td><center><?= $r1->email; ?></center></td>
</tr>
<?php
}
?>
</table>
</div></center>
<div id="footer"><h4 align="center">Created by Roll no: 42|47|51|55</h4>
<p align="center"><a href="logout.php"><font color="white" decoration="none"> Logout</font></a></p>
</div>
</div>
</body>
</html>