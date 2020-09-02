<?php
session_start();

?>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include 'db1.php';
$qn=$_SESSION['qn'];
$un=$_SESSION["uname"];
$q_no=$_SESSION['q_no'];
$s1=$_SESSION['s1'];
$rms1=$_SESSION['current_mcq_no'];

if(isset($_POST['button']))
{
  $_SESSION['qn']=$_POST['button'];
  $_SESSION['current_mcq_no']=$_POST['button']-1;
  $rms=$_SESSION['current_mcq_no']+1;

}
else if(isset($_POST["submitmcq1"]))
{
  $_SESSION['qn']=$_SESSION['qn']-1;
}
else
{
  $_SESSION['qn']=$_SESSION['qn']+1;
}

if(!empty($_SESSION["uname"]))
{
if(isset($_POST["submitmcq"])or isset($_POST["butt1"]) )
{   echo "kjk";
   $s1=1;
    echo '<script>console.log("hhhhhh");</script>';
    $current_mcq_no = $_SESSION["current_mcq_no"];
    $current_mcq = $_SESSION["quiz"][$current_mcq_no]; 
    $bb=$current_mcq["qn"];
    if($current_mcq_no <$_SESSION["max"]-1) {
        
        if(isset($_POST["answer"])) {
          $ans=$_POST["answer"];
          if($ans!=NULL)
          {
            $sq="select * from ans_user where un='$un' and qn='$bb' and ass_no=$q_no;";
            $re=mysqli_query($db,$sq);
            if(mysqli_num_rows($re)>0)
            {  
              $sql="update ans_user set ans='$ans' where un='$un' and qn='$bb'and ass_no=$q_no;";

            }
            else{
          $sql="insert into ans_user values ($q_no,'$un','$bb','$ans');";
          }
           mysqli_query($db,$sql);
           }
         else  
          {
             $sql="delete * from ans_user where un='$un' and qn='$bb' and ass_no=$q_no;";
             mysqli_query($db,$sql);
          }       
         
        } 
       $_SESSION["current_mcq_no"]= $current_mcq_no + 1;   
         $current_mcq_no = $_SESSION["current_mcq_no"]; 

          }

    
    else {
      $bb=$current_mcq["qn"];
        
        if(isset($_POST["answer"])) {
          $ans= $_POST["answer"];
          if($ans!=NULL)
          { $sq="select * from ans_user where un='$un' and qn='$bb'and ass_no=$q_no;";
            $re=mysqli_query($db,$sq);
            if(mysqli_num_rows($re)>0)
            {
              
              $sql="update ans_user set ans='$ans' where un='$un' and qn='$bb'and ass_no=$q_no;";

            }
            else{
            $sql="insert into ans_user values ($q_no,'$un','$bb','$ans');";
          }
             mysqli_query($db,$sql);
          
          }
          }
          $_SESSION["current_mcq_no"]= $current_mcq_no + 1;
         echo "<script>window.location='check.php'</script>";
          }
          $_SESSION['s1']=$s1;
}
else if(isset($_POST["submitmcq1"]))
{   
  echo "gggg";
 
    echo '<script>console.log("dfsdfs");</script>';
    $current_mcq_no = $_SESSION["current_mcq_no"];
    $current_mcq = $_SESSION["quiz"][$current_mcq_no]; 
    $bb=$current_mcq["qn"];
    if($current_mcq_no <=$_SESSION["max"]-1) {
        
        if(isset($_POST["answer"])) {
          $ans=$_POST["answer"];
          echo $ans;
          if($ans!=NULL)
          {
            $sq="select * from ans_user where un='$un' and qn='$bb' and ass_no=$q_no;";
            $re=mysqli_query($db,$sq);
            if(mysqli_num_rows($re)>0)
            {  
              $sql="update ans_user set ans='$ans' where un='$un' and qn='$bb';";

            }
            else{
          $sql="insert into ans_user values ($q_no,'$un','$bb','$ans');";
          }
           mysqli_query($db,$sql);
         }
         else  
          {
             $sql="delete * from ans_user where un='$un' and qn='$bb' and ass_no=$q_no;";
             mysqli_query($db,$sql);
          }       
         
        } 
       $_SESSION["current_mcq_no"]= $current_mcq_no - 1;   
         $current_mcq_no = $_SESSION["current_mcq_no"]; 

          }

    
    else {
      $bb=$current_mcq["qn"];
        
        if(isset($_POST["answer"])) {
          $ans= $_POST["answer"];
          if($ans!=NULL)
          { $sq="select * from ans_user where un='$un' and qn='$bb';";
            $re=mysqli_query($db,$sq);
            if(mysqli_num_rows($re)>0)
            {
              
              $sql="update ans_user set ans='$ans' where un='$un' and qn='$bb';";

            }
            else{
            $sql="insert into ans_user values ($q_no,'$un','$bb','$ans');";
          }
             mysqli_query($db,$sql);
          
          }
          }
          $_SESSION["current_mcq_no"]= $current_mcq_no - 1;
         echo "<script>window.location='check.php'</script>";
          }
          if($_SESSION['s1']==0)
          {   $s1=4;
          }
          else if($_SESSION['s1']==1)
          {   $s1=5;
          }
          else
          {
              $s1=0;
          }
          $_SESSION['s1']=$s1;
}
else if($_POST['button']){
    $s1=2;
  //echo "wwwwwwwww";
  echo "<script>console.log(".$rms.");</script>";
  $q=$_SESSION["max"];
 // echo $rms1;
   $current_mcq_no = $rms1;
   //echo $current_mcq_no ;
    $current_mcq = $_SESSION["quiz"][$current_mcq_no]; 
    $bb=$current_mcq["qn"];
 //echo $bb;
    $ans= $_POST["answer"];
    //echo $ans;
    //echo "fgdf";
    if($_POST["answer"]) {
          $ans= $_POST["answer"];
        //echo $ans;
          if($ans!=NULL)
          { $sq="select * from ans_user where un='$un' and qn='$bb';";
            $re=mysqli_query($db,$sq);
            if(mysqli_num_rows($re)>0)
            {
              
              $sql="update ans_user set ans='$ans' where un='$un' and qn='$bb';";

            }
            else{
            $sql="insert into ans_user values ($q_no,'$un','$bb','$ans');";
          }
             mysqli_query($db,$sql);
          
          }
          }
    $current_mcq_no = $_SESSION["current_mcq_no"];
    $current_mcq = $_SESSION["quiz"][$current_mcq_no];
    $_SESSION['s1']=$s1;
  
}

else {
  echo "<script>console.log('lllllllll');</script>";
    $current_mcq_no = $_SESSION["current_mcq_no"];
    $current_mcq = $_SESSION["quiz"][$current_mcq_no];
    $_SESSION["current_mcq_no"] = $current_mcq_no + 1;
    $q=$_SESSION["max"];
}

}
?>
<html>
<head>
<link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
<link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
<link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QUIZ</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <style type="text/css">

#header{
     background-color: black ;
   color: white;
   text-align: center;
   padding:2px;
}
#navigation{
     line-height:40px;
   border-right: 1px solid black;
   height:100%;
   width:250px;
   float:left;
   padding:0px;
   
}

#time{
     line-height:40px;
   
   height:100px;
   width:200px;
   float:right;
   padding:10px;
   
}
#footer{
     background-color:black;
   color:white;
   text-align:center;
   padding:0px;
   clear:both;
}
input[type=textarea]{
  width: 100%;
  padding: 50px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
#section{

text-align: left;
}
    .w3-btn {width:170px;}
      
.split {
  height: 100%;
  width: 30%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}
.col-md-12
{
  height: 300px;
  width: 500px;
 
}

.right {
  right:30%;
  
}

.left {
  left: -75px;
  top: 30%;

}
    </style>
</head>

<body>
 
  <div id="header">
<h5 style="color:white"><strong>QUIZ POINT</strong></h5>
</div>
<div id="navigation">
<h4 style="padding-left:50px"><i><strong><u>QUESTIONS</u></strong></i></h4>
</div>

<div class="container-fluid mt--8">
      <div class="row">
        <div class="col-xl-12 ">
        
            
                <br>
                <div class="panel">
                
                    
                    <?php

                    if(isset($_POST['submitmcq1']))
                    {
                        
                            $qnn=$qn-2;
                        
                      $_SESSION['current_mcq_no'] = $current_mcq_no;
                      $q_no=$_SESSION['q_no'];
                      $current_mcq['qno'] = $qnn;
                      //$qnn=$qn-2;
                      $sql="select * from qn where ass_no=$q_no and qn_no=$qnn  order by qn_no asc;";
                      $re=mysqli_query($db,$sql);
                     while( $r = mysqli_fetch_assoc($re))
                     {   
                      $current_mcq['qn'] =$r['qn'];
                      
                    }
                    $_SESSION['we']=0;
                    $qn=$qn-1;    

                    }
                    else if(isset($_POST['submitmcq']))
                    {$_SESSION['current_mcq_no'] = $qn-1;
                      $q_no=$_SESSION['q_no'];
                      $current_mcq['qno'] = $qn;
                      $sql="select * from qn where ass_no=$q_no and qn_no=$qn  order by qn_no asc;";
                      $re=mysqli_query($db,$sql);
                     while( $r = mysqli_fetch_assoc($re))
                     {   
                      $current_mcq['qn'] =$r['qn'];
                      
                    }
                    $_SESSION['we']=0;
                    $qn=NULL;    

                    }
                    else if($_POST['button'])
                     {
                      $_SESSION['current_mcq_no'] = $rms;
                      $q_no=$_SESSION['q_no'];
                      $current_mcq['qno'] = $rms;
                      echo '<script>console.log('.$rms.');</script>';
                      $sql="select * from qn where ass_no=$q_no and qn_no=$rms  order by qn_no asc;";
                      $re=mysqli_query($db,$sql);
                     while( $r = mysqli_fetch_assoc($re))
                     {   
                      $current_mcq['qn'] =$r['qn'];
                      
                    }
                    $_SESSION['we']=0;
                    $qn=NULL;
                    $_SESSION['current_mcq_no']=$_SESSION['current_mcq_no']-1;                   
                    }
                    else
                    {
                      $_SESSION['current_mcq_no'] = 0;
                      $q_no=$_SESSION['q_no'];
                      $current_mcq['qno'] = $qn;
                      $sql="select * from qn where ass_no=$q_no and qn_no='1'  order by qn_no asc;";
                      $re=mysqli_query($db,$sql);
                     while( $r = mysqli_fetch_assoc($re))
                     {   
                      $current_mcq['qn'] =$r['qn'];
                      
                    }
                    }

                    ?>
                    <br><br><br><br><br>
                <div class="card" style="padding:20px 20px 20px 20px">


                <?php
date_default_timezone_set('Asia/Kolkata');
$ct=date("Y:m:d H:i:s");
$et=$_SESSION["end_time"];
if($ct >= $et)
{
  echo "<script>window.location='check.php'</script>";
}
?>
<div id="time" style="padding-left:800px">


<button class="btn btn-icon btn-primary" type="button" style="background-color:black;padding:20px 40px 20px 40px">
  <span class="btn-inner--icon"><h3 style="color:white"><i class="ni ni-time-alarm"></i></h3></span>
    <span class="btn-inner--text">

<div id="response"></div> <script type="text/javascript">
  setInterval(function(){
    timer();
  },1000);
  
  
  function timer()
  {
   var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange=function(){
     if(xmlhttp.responseText =="00:00:01")
     {
       window.location="check.php";
     }       
    
    document.getElementById("response").innerHTML=xmlhttp.responseText; 
     
     
   }; 
     xmlhttp.open("GET","response.php",false);
   xmlhttp.send(null);
   
  }
 
</script>
</span>

</button>
</div>
                   
                    <b >Question:<?php echo $_SESSION['current_mcq_no'] +1;?>/<?php echo $_SESSION["max"];?>   <br/><br/><?php echo $current_mcq["qn"] ?></b><br/><br/>
                    <form action="quiz.php"  name="quiz" method="POST"  class="form-horizontal">
                        <br/>
                        <?php
                        $q=$current_mcq["qn"];
                        $sq="select * from ans_user where un='$un' and qn='$q' ;";
                        $re=mysqli_query($db,$sq);
                        while($r=mysqli_fetch_assoc($re))
                        { $lmn='';
                          $lmn=$r['ans'];
                          //echo $lmn;
                         if($lmn=='<br /><b>Notice</b>:  Undefined variable: lmn in <b>C:xampphtdocsquiz2quiz.php</b> on line <b>184</b><br />')
                          $lmn='';
                        }
                         ?>
                        
                       
                        <input class="d-flex align-items-left" type="textarea" id='code' rows="10" cols="20" value= '<?php echo $lmn ; ?>' name="answer" ><br/><br/><span class="checkmark"></span></label><br>
                        <div style="padding-left:70%"  >
                        <?php
                        if($_SESSION['current_mcq_no']>0)
                          {echo'
                        <button  type="submit"  class="btn btn-outline-primary" name="submitmcq1" ></span>&laquo;&nbsp;Previous&nbsp;</button>';
                      }
                      if($_SESSION['current_mcq_no']<$_SESSION['cc']-1)
                          {echo'
                        <button type="submit" class="btn btn-outline-primary" name="submitmcq" ></span>&nbsp;Next&nbsp;&raquo;</button>';
                      }
                        ?>

                        </div>
                      <div style="padding-left:450px;padding-top:30px">
                      
            <button type="button" class="btn  btn-danger"  data-toggle="tooltip" data-placement="bottom" onclick="quit();" title="Quiting Test will Take the Marks of currently Answered Qns">Submit Test</button>
                      
            </div>


                      </h1>
</h1>
                


</div>
              </div>
           </div>  
 
</div>
</div>

        <div class="split left">
          <center>
        <div class="w3-container">
 
<div class="w3-container">
  <?php
  include 'db1.php';
  $q_no=$_SESSION['q_no'];
  $_SESSION['we']=1;
  $i=1;
$sql="select * from qn where ass_no=$q_no order by qn_no asc;";
$re=mysqli_query($db,$sql); 
$cnt=mysqli_num_rows(mysqli_query($db,$sql));
while( $r = mysqli_fetch_assoc($re))
{   $a=$r['qn_no'];
    $aaa=$r['qn'];
$sql1="select * from ans_user where un like '$un' and ass_no like $q_no and qn like '$aaa';";


if(mysqli_num_rows(mysqli_query($db,$sql1))>0)
{
  echo'<button class="w3-button w3-green w3-round-xlarge" value='.$a.' name="button" >'.$i++.'</button>     ';
  if(($i%5)==0)
  {
    echo '<br><br>';
  }
}
  else
   echo'<button class="w3-button w3-grey w3-round-xlarge" value='.$a.' name="button" >'.$i++.'</button>   ';
   if(($i%5)==0)
  {
    echo '<br><br>';
  }    
}
      ?>
  </div>
</form>
    </div>
  </center>
  </div>


</h1>
</h1>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>ss
<script> 
function quit(){
  window.location='check.php';
}

 // $(window).blur(function(){
 // window.location='check.php';
//});
//$(window).focus(function(){
  //console.log('focus');
//});
</script>
</body>
</html>