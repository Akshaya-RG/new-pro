<?php
session_start();
$_SESSION['uname']='harsh@gmail.com';
?>
<html>
<body>
	<form action="resultview.php" method="post">
<button name='but' type='submit' value='4'>View</button>
</form>
</body>
</html>
