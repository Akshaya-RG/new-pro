<?php
session_start();
include 'db.php';
extract($_POST);
function otp_generate($chars) 
{
  $data = '1234567890';
  return substr(str_shuffle($data), 0, $chars);
}

if(isset($_POST['otp']))
{
$uno2=$_SESSION['uno1'];
$query="select * from user where un like '$uno2' and otp like '$otp' ;";
  $result=mysqli_query($db,$query);
 if (mysqli_num_rows($result)>0) {
        if(mysqli_query($db,"update user set otp='1abc' where un like '$uno2'"))
      { echo json_encode(array("statusCode"=>200));
                   $_SESSION['el1']=0;
                     echo json_encode(array("statusCode"=>200));

  
      }      
 
    }
    else
    {         $_SESSION['el1']=2;

    	$pass1=otp_generate(7);
    	mysqli_query($db,"update user set otp='$pass1' where un like '$uno2'");
    }

          
 }

?>
