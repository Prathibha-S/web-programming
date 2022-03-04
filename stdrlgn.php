<?php

session_start();
$con = new mysqli("localhost","root","","student");


if(isset($_POST['s']))
{
  if (!$con) 
   {
      echo "Connection failed";
   } 

else
  {  

     $un=$_POST['em'];
     $pwd=$_POST['pa'];

     $sql="SELECT * FROM `studentsystem` WHERE email='$un' and password='$pwd'";

     $result = $con->query($sql); 

     if(mysqli_num_rows($result)>0)
     {
        $rows = mysqli_fetch_array($result); 
        $id=$rows[0];

        $_SESSION['login_id']=$id;

      
        header("location:/studentsystem/stdprof.php");
      }

    else
    {
      ?>
      <script>
      alert('invalid user')
      </script>
      <?php
      
      header("refresh:1; url=stdrlgn.php");
    }

  }
}

?>

<html>
<head>
<title></title>
<style>
div.reg{
	background-color:#fad45e;
	width:1200px;
	height:190px;
	padding-left:0px;
	padding-right:0px;
	padding-top:0px;
	padding-bottom:0px;
	margin-top:0px;
}
div.student{
	background-color:#fa5e85;
	height:225px;
	width:1200px;
}
div.faculty{
	background-color:#fa5e85;
	height:225px;
	width:1200px;
}
div.faculty.btn{
	color:#641E16;
  	cursor: pointer;
	background-color: #641E16;
  	color: white;
  	padding: 11px;
  	font-size: 15px;
  	border: none;
}
a{
	text-decoration:none;
	color:green;
}
</style>
<body><center>
<form method="POST" class="form">
<div class="reg">
<h1>STUDENT LOGIN</h1>
</div>
<div class="student">
<p>Click on the below button to login for students</p>
E-mail id: <input type="email" required placeholder="Username" name="em">
Password: <input type="password" required placeholder="Password" name="pa">
<input type="submit" value="STUDENT LOGIN" name="s" class="button">
</div>
</form>
</center>
</body>
</html>
