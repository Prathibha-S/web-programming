<?php 
  $con = new mysqli("localhost","root","","student");
  if(isset($_POST['sb']))
  {
    $nm = $_POST['na'];
    $reg = $_POST['re'];
    $ph = $_POST['ph'];
    $dob = $_POST['dob'];
    $g = $_POST['g'];
    $cou = $_POST['co'];
    $se = $_POST['sem'];
    $roll = $_POST['rn'];
 
    $u = $_POST['em'];
    $p = $_POST['pa'];

    echo '$reg','$nm','$ph','$dob','$cou','$roll','$se','$roll','$g','$u','$p';

    $sql = "INSERT INTO `studentsystem`(`regno`, `name`, `phone`, `dob`, `course`, `sem`, `roll`, `gender`, `email`, `password`) VALUES ('$reg','$nm','$ph','$dob','$cou','$se','$roll','$g','$u','$p')";

    $res = $con->query($sql);

    echo "$res";

    if($res){
      ?>
      <script>
      alert('Registration Completed')
      </script>
      <?php
      
      header("location:/studentsystem/stdrlgn.php");
    }
    else{
      echo "failed";
    }

  }

?>
<html>
<head>
<title>
</title>
<style>
div.std{
	background-color:#fad45e;
	width:1200px;
	height:190px;
	padding-left:0px;
	padding-right:0px;
	padding-top:0px;
	padding-bottom:0px;
	margin-top:0px;
}
div.frm{
	background-color:lavender;
	width:1200px;
	height:400px;
	padding-left:0px;
	padding-right:0px;
	padding-top:0px;
	padding-bottom:0px;
	margin-top:0px;
}
a{
	text-decoration:none;
	color:green;
}
</style>
<body>
<center>
<form method="POST"class="form">
<div class="std">
<h1>STUDENT DETAIL REGISTRATION</h1>
</div>
<div class="frm">
<table border="1">
<tr><td>Register Number: <input type="text" name="re" required></td></tr>
<tr><td>Name: <input type="text" pattern="[a-zA-Z ]{2,30}" required name="na"></td></tr>
<tr><td>Mob-No: <input type="tel" pattern="[0-9]{10}" required name="ph" ></td></tr>
<tr><td>Date-of-Birth: <input type="date" required name="dob"></td></tr>
<tr><td>E-mail id: <input type="email" required name="em"></td></tr>
<tr><td>RollNo: <input type="number" name="rn" min="1" max="60" required></td></tr>
<tr><td>Gender: <input type="radio" required name="g" value="Male">Male
                <input type="radio" required name="g" value="Female">Female</td></tr>
<tr><td>Course Name: <select required name="co">
        				<option value="">--SELECT--</option>
        				<option value="B.Tech CS">B.Tech CS</option>
        				<option value="B.Tech EC">B.Tech EC</option>
        				<option value="MCA">MCA</option>
        				<option value="Tech Civil">M.Tech Civil</option>
        				<option value="Other">Other</option>
        			</select></td></tr>
<tr><td>Sem: <select required name="sem">
        				<option value="">--SELECT--</option>
        				<option value="1">1</option>
        				<option value="2">2</option>
        				<option value="3">3</option>
        				<option value="4">4</option>
        				<option value="5">5</option>
        				<option value="6">6</option>
        				<option value="7">7</option>
        				<option value="8">8</option>
        			</select></td></tr>
<tr><td>Password: <input type="password" required name="pa"></td></tr>
</table>
<input type="submit" value="REGISTER" name="sb" class="button">
<center>
</body></html>