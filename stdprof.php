<?php
session_start();

$user=$_SESSION['login_id'];

$con = new mysqli("localhost","root","","student");

$sql="SELECT * FROM `studentsystem` WHERE s_id=$user";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Studnt Profile</title>
</head>
<style>
div.py{
	background-color:#f5f570;
	width:1200px;
	height:190px;
	padding-left:0px;
	padding-right:0px;
	padding-top:0px;
	padding-bottom:0px;
	margin-top:0px;
}
div.frm{
	background-color:#60d354;
	width:1200px;
	height:400px;
}
</style>
<body>
<form class="form"> 
<div class=py>
     <br><br>
     <h1 align="center" style="font-weight: bolder;">Student Profile</h1>
     </div>
     <div class="frm" align="center">
<br>
<table align="center" style="font-weight: bolder;">
<?php 
while ($row=mysqli_fetch_assoc($result)) {
?>
<tr>
<td>Registration No:</td>
<td height="40"><input type="text" value="<?php echo $row['regno']; ?>" readonly></td>
<td></td>
<td></td>
<td>Name</td>
<td><input type="text" value="<?php echo $row['name']; ?>" readonly></td>
<td></td>
<td></td>
<td>Phone</td>
<td><input type="text" value="<?php echo $row['phone']; ?>" readonly></td>
<tr></tr>
<td>DOB</td>
<td height="40"><input type="text" value="<?php echo $row['dob']; ?>" readonly></td>
<td></td>
<td></td>
<td>Course</td>
<td><input type="text" value="<?php echo $row['course']; ?>" readonly></td>
<td></td>
<td></td>
<td>Sem</td>
<td><input type="text" value="<?php echo $row['sem']; ?>" readonly></td>
<td></td>
<td></td>
</tr></tr>
<td>Gender</td>
<td height="40"><input type="text" value="<?php echo $row['gender']; ?>" readonly></td>
<td></td>
<td></td>
<td>Email</td>
<td><input type="text" value="<?php echo $row['email']; ?>" readonly></td>
<td></td>
<td></td>
<td>Roll.No</td>
<td><input type="text" value="<?php echo $row['roll']; ?>" readonly></td>
</tr>
<?php
}
?>
<td></td>
<td></td>
<td></td>
<td></td>
</table>
</div>
</form>
</body>
</html>