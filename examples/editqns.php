<?php
session_start();
include 'db.php';
$k=$_SESSION['k'];
extract($_POST);
if(isset($_POST['deleteid'])&&isset($_POST['ass']))
{
  $uid=$_POST['deleteid'];
  $ass_no=$_POST['ass'];
  mysqli_query($db,"DELETE FROM qn  WHERE ass_no = '$ass' and qn_no= '$uid';");
  echo "<script type= 'text/javascript'>alert('Data Deleted Successfully ')</script>";
}
if(isset($_POST['qno_u'])&&isset($_POST['ass'])&&isset($_POST['qn_u'])&&isset($_POST['ans_u']))
{   

	$qq="UPDATE qn SET qn = '$qn_u', ans_key ='$ans_u' WHERE ass_no='$ass' and qn_no='$qno_u';";
if (mysqli_query($db,$qq)) {   
   	    echo "<script type= 'text/javascript'>alert('Profile Updated')</script>";
     }
 }
 if(isset($_POST['ass_no'])&&isset($_POST['qno'])&&isset($_POST['qn'])&&isset($_POST['ans'])&&isset($_POST['levels']))
 {

      
      $a=$_POST['levels'];
      $su=$_POST['ans'];
      
      for($qs=0 ;$qs < sizeof($a); $qs++)
       {
        $su = $su." ".$a[$qs];
       }
       
     
    $sql="INSERT INTO `qn`  VALUES ( '$ass_no', '$qno', '$qn', '$su');";
    if ($db->query($sql) === TRUE) {
     
     echo "<script type= 'text/javascript'>alert('Registered successfully')</script>";
   }
 }
 
?>