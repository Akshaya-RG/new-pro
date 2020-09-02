<?php
session_start();
?>
<?php
include 'db1.php';
$q_no=$_POST['but'];
$_SESSION['qn']=1;
$_SESSION['q_no']=$q_no;
require_once("first.php");
$q="select * from qn where ass_no like $q_no;";
$cc=mysqli_num_rows(mysqli_query($db,$q));
$_SESSION['cc']=$cc;
$_SESSION['we']=1;
$_SESSION['quiz_num']=$q_no;
//echo $q_no;
require_once("quiz_mod.php");

$aa=$_SESSION["uname"];
if(!empty($_SESSION["uname"]))
{
if(isset($_SESSION['q_no']))
{
    $quizObject = new Quiz();
    
    $mcq_ids = $quizObject->get_mcq_ids($q_no);
    //huffle($mcq_ids);
   
    $_SESSION["max"]=count($mcq_ids);
    $mcq_ids = implode(",",$mcq_ids);
    //echo $mcq_ids;
    $_SESSION['m']=$mcq_ids;
   
    $mcqs = $quizObject->get_mcqs($mcq_ids,$q_no);

    //shuffle($mcqs);

    $_SESSION["quiz"] = $mcqs;
    $_SESSION["current_mcq_no"] = 0;
   echo "<script>window.location='quiz.php'</script>";
   exit;
}
/*date_default_timezone_set("Asia/Kolkata");
$date=Date("Y-m-d");
$time=Date("H:i:s");

$sql1 = "select time1,time2,title from schedule where Date1='$date'  ";
$result=$db->query($sql1);
$em=$_SESSION["uname"];
$sql = "select email from result where email='$em'  ";
$result1=$db->query($sql);
if($result1->num_rows > 0)
{

while($row1=$result1->fetch_assoc())
{
    $email=$row1["email"];
    
    
}
    
}
else
{
  $email="sample";
}*/
}

else{
    //echo "<script>window.location='dashboard2.php'</script>";
    exit;
}

?>
