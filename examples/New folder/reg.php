<?php
session_start();
include 'db.php';


extract($_POST);
//$name='harsh@gmail.com';
$name=$_SESSION['uname'];

if(isset($_POST['fn'])&&isset($_POST['ln'])&&isset($_POST['dob'])&&isset($_POST['phno'])&&isset($_POST['gen'])&&isset($_POST['tins'])&&isset($_POST['ins'])&&isset($_POST['clas'])&&isset($_POST['gp'])&&isset($_POST['rno']))
{ 
    //echo json_encode(array("statusCode"=>201));
  if($tins=='school')
{

$q="update user set fn='$fn',ln='$ln',dob='$dob',phno='$phno',gender='$gen',t_ins='$tins',ins='$ins',class='$clas',gp='$gp',rno='$rno'  where un like '$name' ";
echo json_encode(array("statusCode"=>200));

}
else
{

$q="update user set fn='$fn',ln='$ln',dob='$dob',phno='$phno',gender='$gen',t_ins='$tins',ins='$ins',yr='$clas',dept='$gp',rno='$rno' where un like '$name' ";
echo json_encode(array("statusCode"=>200));

}
mysqli_query($db,$q);



}


?>