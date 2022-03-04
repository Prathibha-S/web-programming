<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["username"] = "prathibha";
$_SESSION["email"] = "prathibha@gmail.com";
echo "Session variables are set.";
?>
</body>
</html>
