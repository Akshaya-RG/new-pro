<?php
include 'db.php';
session_start();
$un=$_SESSION['uname'];

mysqli_query($db,"update user set online='offline'  where un='$un'");
echo "<script>window.location.href='frontpage.php';</script>";

session_destroy();
?>