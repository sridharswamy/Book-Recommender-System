<?php
session_start();
if(isset($_SESSION['username']))
header("Location:index.php");
else
header("Location:about.php");
?>

<html>
<body>
Login Successful
</body>
</html>