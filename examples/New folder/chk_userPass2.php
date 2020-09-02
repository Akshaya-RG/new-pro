<?php
session_start();
include 'db.php';

$ab=$_SESSION['uname'];

extract($_POST);
 
 
if(isset($_POST['old_pass'])&&isset($_POST['password'])&&isset($_POST['retypepassword']))
 {

	$a=md5($retypepassword);
	$b=md5($old_pass);

  $query="select * from user where  pass like '$b' and un='$ab' ";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)>0) 
	{   
		
 		$qu="UPDATE  user SET pass='$a' where pass like '$b'  and un='$ab' ";
	   
	    if( mysqli_query($db,$qu))
	    {
        echo json_encode(array("statusCode"=>200));
     	
       }



 	} 
 	else
 	{
 		  echo json_encode(array("statusCode"=>202));

 	}
 
 	
        
        
  }

?>