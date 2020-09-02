<?php
session_start();
include 'db.php';
extract($_POST);
function otp_generate($chars) 
{
  $data = '1234567890';
  return substr(str_shuffle($data), 0, $chars);
}
function password_generate($chars)  
{
   $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';   
   return substr(str_shuffle($data), 0, $chars);
    }

$pass1=password_generate(7);
$otp=otp_generate(5);

if(isset($_POST['email']))
{
  
  $_SESSION['uno1']=$email;


$query="select * from user where un like '$email' and is_deleted like 'not deleted';";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)>0) {

         echo 'This Email id already exist'; 
         $_SESSION['el']=1;
        }
 	else{
$query=mysqli_query($db,"insert into user (un,pass,otp,created_by) values('$email','$pass1','$otp','$email')");
if($query)
{                  
        
  echo json_encode(array("statusCode"=>200));
  $_SESSION['el']=0;
}

}

}
if(isset($_POST['un'])&&isset($_POST['pass']))
{
  $query="select pass from user where un like '$un' and is_deleted like 'not deleted' ;";
  $result=mysqli_query($db,$query);
  while ($r=mysqli_fetch_assoc($result)) {
    $password = $r['pass'];
  }
  if ($password == $pass) {
   mysqli_query($db,"update user set online='online' where un like '$un';");
    $_SESSION['uname']=$un;
    
    $_SESSION['elll']=0;
     echo json_encode(array("statusCode"=>200));
       
  } 
  else
  {
    $_SESSION['elll']=1;
  } 

}

if(isset($_POST['aun'])&&isset($_POST['apass']))
{
  $query="select pass from admin where an like '$aun' and is_deleted like 'not deleted' and (status like 'unblock' or status like 'Superadmin') ;";
  $result=mysqli_query($db,$query);
  while ($r=mysqli_fetch_assoc($result)) {
   $password = $r['pass'];
  }
  if ($password == $apass) {
     
        $_SESSION['ell']=0;
    $_SESSION['ano']=$aun;
    echo json_encode(array("statusCode"=>200));
        
  }
  else
  {
    $_SESSION['ell']=1;
  } 
}
if(isset($_POST['otp']))
{
  $uno2=$_SESSION['uno1'];

$query="select * from user where un like '$uno2' and otp like '$otp' ;";
  $result=mysqli_query($db,$query);
 if (mysqli_num_rows($result)>0) {
        if(mysqli_query($db,"update user set otp='1abc' where un like '$uno2'"))
      { echo json_encode(array("statusCode"=>200));  
      }      
 
    }

          
 }

?>
