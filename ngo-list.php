<?php
include('connection.php');
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
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
    <form action="" method="post">
<table>
<tr>
<td width="200px" height="50px">Enter NGO Name</td>
<td width="200px" height="50px"><input type="text" name="nname" placeholder="Enter Name"></td>
<td width="200px" height="50px">Enter Your Name</td>
<td width="200px" height="50px"><input type="text" name="uname" placeholder="Enter Name">
</td>
</tr>
<tr>
<td width="200px" height="50px">Enter purpose</td>
<td width="200px" height="50px"><textarea name="pur"></textarea></td>
<td width="200px" height="50px">Enter City</td>
<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
</tr>
<tr>

<td width="200px" height="50px">Select Blood Group</td>
<td width="200px" height="50px">
<select name="bgroup"> 
<option>O+</option>
<option>AB+</option>
<option>AB-</option>
<option>All</option>
</select>
</td>
</tr>
<tr>
<td width="200px" height="50px">Enter E-Mail</td>
<td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
<td width="200px" height="50px">Enter Mobile No</td>
<td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
</tr>
<tr>
<td><input type="submit" name="sub" value="Save"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['sub']))
{
    $nname=$_POST['nname'];
    $uname=$_POST['uname'];
    $pur=$_POST["pur"];
    $city=$_POST['city'];
    $bgroup=$_POST['bgroup'];
    $mno=$_POST['mno'];
    $email=$_POST['email'];
    $q=$db->prepare("INSERT INTO ngo_list (nname,uname,pur,city,bgroup,mno,email) VALUES
        (:nname,:uname,:pur,:city,:bgroup,:mno,:email)");
    $q->bindValue('nname',$nname);
    $q->bindValue('uname',$uname);
    $q->bindValue('pur',$pur);
    $q->bindValue('city',$city);
    $q->bindValue('bgroup',$bgroup);
    $q->bindValue('mno',$mno);
    $q->bindValue('email',$email);
    if($q->execute())
    {
    echo "<script>alert('Registration Successfull')</script>";
    }
    else
    {
    echo "<script>alert('Registration Fail')</script>";
    }
}
?>
</div></center>
<div id="footer"><h4 align="center">Created by Roll no: 42|47|51|55</h4>
<p align="center"><a href="logout.php"><font color="white" decoration="none"> Logout</font></a></p>
</div>
</div>
</body>
</html>