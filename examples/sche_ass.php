<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$k=$_SESSION['k'];
$_SESSION['dd']=1;
$_SESSION['a']=1;
$_SESSION['i']=0;
include 'db.php';
include 'adb.php';
$an=$_SESSION['ano'];
 $output1 = preg_split("/( |,|\n)/", $scheass );
        $user1 = array();
        for ($x = 0; $x < sizeof($output1); $x++) {
            array_push($user1,$output1[$x]) ;
          }
?>
<html>

<head>
  <style type="text/css">
input[type=text] {
  
 
  box-sizing: border-box;
}
.inv {
    display: none;
}
  input[type=text],input[type=date],input[type=time],input[type=number]{
 border:none;
}

/* Set a style for all buttons */
button {
  background-color:#5e72e4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */



.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: absolute; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 25%;
  top: 70%;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: scroll;
 /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-left:200px;
  padding-right:200px;
  padding-top: 50px;
  padding-bottom: 100px;

}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
    max-height: calc(100vh - 60px);
    overflow-y: auto;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}


/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}


@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
     
  }
}
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#FFFFFF ;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 100px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 17px;
  color: #111;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #6A5ACD;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 100px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
body  {
  background-color: #fff;
 
} 
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Quiz Point</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark  border-bottom" style="background-color:black">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
  <a class="nav-link active" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a><br>
              <a class="nav-link " href="view_admin.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">View Admin</span>
              </a><br>
              <a class="nav-link" href="user.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">View user</span>
              </a><br>
              <a class="nav-link " href="sche_ass.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">View Scheduled Assessments</span>
              </a><br>
              <a class="nav-link" href="comp_ass.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">View Completed Assessments</span>
              </a>
</div>
<span style="font-size:30px;color: #FFFFFF;cursor:pointer" onclick="openNav()" >&#9776; </span>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              
                
            </li>
           
            
          </ul>
         
 <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
             <li>
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><i class="ni ni-single-02"></i>
                  <span>My profile</span></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="profile.php" class="dropdown-item">
                  <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../examples/images/<?php echo $s; ?>">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $b; ?></span>
                  </div>
                </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-badge"></i>
                  <span><?php echo $a; ?></span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <span class="badge badge-dot mr-4">
                       <i class="bg-success"  style=""></i>
                       <span class="status">&nbsp &nbsp status</span>
                     </span>
               </a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "750px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6"  style="background-image:url(images/bimage.jpeg);background-size: cover";>
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?php
              if($stss=='Superadmin')
                echo 'Super Admin';
              else
                echo'Admin';
              ?></h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Scheduled Assessment</a></li>
                  
                </ol>
              </nav>
            </div>
            
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
   <div class="row">
        <div class="col">
          <div class="card">
            <br>
          
            <!-- Card header -->
            <div class="card-header border-0">
              <h2 class="mb-0">Admin</h2>
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0" >
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" id="search" onkeyup="showUser(this.value)" type="text">
              </div>
            </div>
          </form>
                <div id="txtHint"><b></b></div>  
            </div>
            <?php
              if($stss=='Superadmin' || $user1[0]=='add')
              {
                ?>
           <center><button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary btn-lg" style="width:250px;">Schedule Assessment</button></center><br><br>
              
            <?php
            }
            ?>  
            
           
            <!-- Light table -->
          
                    
                    <div class="table-responsive" id=recorddisplay>
              
              
                    <?php
                    $i=1;
                    if(isset($_GET['page']))
                     {
                       $page=$_GET['page'];
                       $_SESSION["pg"] = $page;
                       
                      ?>
                      <div id="recorddisplay">

                      </div>

<?php
                     }
?>
           
            </div>
            <!-- Card footer -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="id01" class="modal">

  <form class="modal-content animate" action="add_test.php" method="post" >
  
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
 <?php
 date_default_timezone_set('Asia/Kolkata');
                    $today = date("Y-m-d"); 

                    $cnt = mysqli_query($db,"SELECT max(ass_no) as dash FROM post_ans");
                    while($rrr=mysqli_fetch_assoc($cnt))
                    {
                      $rr=$rrr['dash'];
                    }
                    $row= $rr+1;
                    $_SESSION['ass_no']=$row;
                    ?>
            
    <div class="container">

       <h2 class="mb-0">Assessment  :  <?php echo $row; ?></h2>
            <br>

      <div class="row">               
             <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Assessment no</label>
                        <input type="text"  class="form-control" style="border-bottom: 1px solid grey;"  placeholder="<?php echo $row;?>" disabled>
            
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Title   </label>
                        <input type="text" name="name" id='aname' class="form-control" style="border-bottom: 1px solid grey;" placeholder="Enter" required>  
            <label id="fncheck">&nbsp&nbsp&nbsp&nbsp&nbsp </label>
                      </div>
                    </div>
                   <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Schedule date   </label>
                         <input type="date" name="startDate" id='astartDate' class="form-control" style="border-bottom: 1px solid grey;"  min="<?php echo $today;?>" required>  
                        
                     
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Schedule time</label>
                         <input type="time" name="st" id='ast' class="form-control" style="border-bottom: 1px solid grey;" required>  
             </div>
                    </div>
            <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Freeze date   </label>
                         <input type="date" type="date" name="endDate" id='aendDate' class="form-control" style="border-bottom: 1px solid grey;" required> 
                        <label id="result" ></label>
                     
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Freeze time</label>
                         <input type="time" name="et"  id='aet' class="form-control" style="border-bottom: 1px solid grey;" required>  
             <label id="result3"></label>  
             </div>
                    </div>
                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Marks</label>
            <input type="number" name="marks" id='amarks' class="form-control" style="border-bottom: 1px solid grey;" required>  
                      </div>
                    </div>
           <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Negative Marks</label>
                        <input type="number" name="neg_marks" id='aneg_marks' class="form-control" style="border-bottom: 1px solid grey;"required>  
                        <label id="result1" ></label> 
                      </div>
                    </div>
                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">No.Of.Questions</label>
                         <input type="number" name="nn" id='ann' class="form-control" style="border-bottom: 1px solid grey;" required>  
                       <label id="result2"></label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                         <label class="form-control-label" for="input-last-name">Total Time(mins)</label>
                            <input type="number" name="tot_time" id="atot_time" class="form-control" style="border-bottom: 1px solid grey;" required><br> 
                            <label id="result5" ></label>  
                       
                    
                      </div>
                    </div>

                <div class="col-lg-6">
                      <div class="form-group">
                         <label class="form-control-label" for="input-last-name">Type of ins:</label>
        
         


                        <div class="select-option">
                              
                         
      <select id="t_ins"  class="form-control" name="t_ins"  >
        <option value="" hidden>Select type if institution</option>
            <option value="general">General</option>
            <option value="school">school</option>
            <option value="clg">college</option>
       
        </select>
  
      
     </div>
   </div>
 </div>


        <div id="school" class="inv">
              
       
                <div class="pl-lg-4">
                  <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group">
                        
                      <select id="ains"  class="form-control"   name="ins" >
            <option value="abb"  selected hidden>Select Institution name</option>
            <option value="tvs">tvs</option>
            <option value="vikaasa">vikaasa</option>
           <option value="mahatma">mahatma</option>
             

       
        </select>
  
                      </div>
                    </div>
                  
               <h5 id="re"></h5> <br>
               

                  <div class="col-lg-6">
                      <div class="form-group">
                        
                         <select name="class" id='aclass'  class="form-control">
                                    
                                     <option value="abb" selected hidden>class</option>
                                    <option value="11" >XI</option>
                                     <option value="12" >XII</option>
                                 



                                </select>
                   
                      </div>
                    </div>

<label id="re1"></label> <br>
                
                    <div class="col-lg-6">
                      <div class="form-group">
                        

                        <select id="agp"  name="gp"  class="form-control" >
                                     <option value="abb" selected hidden>group</option>
                  <option value="cse">cse</option>
                                    <option value="bio" >bio</option>
                                    <option value="commerce" >commerce</option>
                                     
                                </select>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
                <label id="re2"></label> <br>
               </div>

        


               
               <div id="clg" class="inv">

                 
                <div class="pl-lg-4">
                  <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group">
                        

                                     <select id="aains"  class="form-control"   name="ins" >
            <option value="abb" selected hidden>Select Institution name</option>
            <option value="klnce">klnce</option>
            <option value="klnit">klnit</option>
           

       
        </select>




                      </div>
                    </div>
               

                  <label id="re3"></label> <br>
               

               

                  <div class="col-lg-6">
                      <div class="form-group">
                        
                        <select id="ayr"  name="yr"  class="form-control" >
                                    <option value="abb" selected hidden>Year</option>                                   
                    <option value="1">I</option>
                                    <option value="2" >II</option>
                                    <option value="3" >III</option>
                                    <option value="4" >1V</option>

                                     
                                </select>
                      </div>
                    </div>
<label id="re4"></label> <br>

                
                    <div class="col-lg-6">
                      <div class="form-group">
                        
                      <select id="adept"  name="dept"  class="form-control"  >
                                    <option value="abb" selected hidden>Department</option>
                  <option value="CSE">CSE</option>
                                    <option value="IT" >IT</option>
                                    <option value="EEE" >EEE</option>
                                     <option value="ECE" >ECE</option>
                                     <option value="MECH" >MECH</option>
                                        <option value="CIVIL" >CIVIL</option>
                                </select>
                      </div>
                    </div>
                    <label id="re5"></label> <br>
                    
                  </div>
                </div>
              </div>
           


                          </div>    

      <button type="submit" name='add' class="enableOnInput" value='<?php echo $row ;?>' style="width: 100%" onclick="addass(<?php echo $row ;?>)">Add</button>
      
    </div>

    </form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
   $('#search').keyup(function(){
      var search = $('#search').val();
      if(search.length == ''){
    readrecords();
    }    
    else
    {
      $("#nnav").hide(); 
      $("#tab").hide(); 
    }

        });
    function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","scheass.php?q="+str,true);
  xmlhttp.send();

  
}

    
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>
 <script>
            document
                .getElementById('t_ins')
                .addEventListener('change', function () {
                    'use strict';
                    var vis = document.querySelector('.vis'),   
                     t_ins = document.getElementById(this.value);
                    if (vis !== null) {
                        vis.className = 'inv';
                    }
                    if (t_ins !== null ) {
                        t_ins.className = 'vis';
                    }
            });
        </script>

  <script>
   
     function readrecords(){

$.ajax({
url:"scheass.php",
type:'post',


success:function(response){
$('#recorddisplay').html(response);
}
});
}
 $(document).ready(function(){
  readrecords();
  var valid1=false;
   var valid2=false;
   var valid3=false;
   var valid4=false;
   var valid5=false;
   var valid6=false;
   var v1=false;
});
 $('#aname').keyup(function(){
     
    anamechk();
    ff();
            
        });
function anamechk(){
          valid1=false;
          var fn_val = $('#aname').val();
            
            if(fn_val.length == ''){
              $('#fncheck').show();
              $('#fncheck').html("**please fill assessment name");
              $('#fncheck').focus();
              $('#fncheck').css("color","red");
              valid1=false;
              
              
            }else{
            $('#fncheck').hide();
            valid1=true;
            
             }
                         
                      if((fn_val.length < 3) ||(fn_val.length >10)){
              $('#fncheck').show();
              $('#fncheck').html("**please length between 3 and 10");
              $('#fncheck').focus();
              $('#fncheck').css("color","red");
              
              valid1=false;

              
              
            }else{
            $('#fncheck').hide();
            valid1=true;
              }       
             
         return valid1;
        
        }
        $('#atot_time').keyup(function(){
         
    t_tchk();
    ff();
            
        });
        function t_tchk()
{
  var stt = $("#atot_time").val();
 
  if(stt <= 0)
  {
     $('#result5').show();
                  $("#result5").html(" * Time should be greater than 0 mins");
                  $('#result5').focus();
                 $('#result5').css("color","red");
                 
                                valid5=false;
  }
  else
  {
    $('#result5').hide();
            valid5=true;
  }
  return valid5;
}
$('#aet').change(function(){
    
    etchk();
    ff();
            
        });
$('#aendDate').change(function(){
    
    edchk();
    ff();
            
        });
function edchk()
{
  var startDate = $("#astartDate").val();
  var endDate = $("#aendDate").val();
  if (Date.parse(startDate) > Date.parse(endDate)) {
               $('#result').show();
                  $("#result").html(" * Start date should not be greater than end date");
                  $('#result').focus();
                 $('#result').css("color","red");
                 
                                valid6=false;
           }
           else
          {  $('#result').hide();
             
            valid6=true;
          }
          return valid6;
        }
          
function etchk()
{
  
  var st = $("#ast").val();
  var et = $("#aet").val();
  var startDate = $("#astartDate").val();
  var endDate = $("#aendDate").val();
  
  
          
        
         if (Date.parse(startDate) == Date.parse(endDate))
          {
             if(st>=et)
             {
              $('#result3').show();
              $('#result3').html(" * End time should not be greater than start time");
              $('#result3').focus();
              $('#result3').css("color","red");
            valid2=false;
           
          }

          
          else
          {
            
             $('#result3').hide();
            valid2=true;
          }
        }
        else
          {  $('#result').hide();
             
            valid2=true;
          }
          console.log("hello");
          console.log(valid2);
          return valid2;
}


$('#aneg_marks').keyup(function(){
   
    n_mchk();
    ff();
            
        });
function n_mchk()
{
  var m = $("#amarks").val();
  var nm = $("#aneg_marks").val();
  if(m <= 0 || nm <= 0)
  {
     $('#result1').show();
                $("#result1").html(" * marks should be greater than 0");
                $('#result1').focus();
              $('#result1').css("color","red");
                valid3=false;
  }
  else if (m < nm) {
            $('#result1').show();
                $("#result1").html(" * negative marks should not be greater than mark");
                $('#result1').focus();
              $('#result1').css("color","red");
                valid3=false;
           }
           else
          {
            $('#result1').hide();
            valid3=true;
          }
          console.log("hii");
          console.log(valid3);
       return valid3;
}
$('#ann').keyup(function(){
     
    n_nchk();
    ff();
            
        });
function n_nchk()
{
   var n = $("#ann").val();
    var nk = $("#t_ins").val();
    

   if(n<=0)
       {
        $('#result2').show();
        $("#result2").html(" * Enter valid no of questions");
        $('#result2').focus();
        $('#result2').css("color","red");
        valid4=false;
       }
       else
          {
            $('#result2').hide();
            valid4=true;
          }
          return valid4;
}
$('#t_ins').change(function(){
     
     var n = $("#t_ins").val();
     
     if(n== "school"){
    $('#ains').change(function(){
    $('#aclass').change(function(){
      $('#agp').change(function(){

    tinschk();
    ff();
          });  
        });
  });
  }
  else if(n== "clg"){
    $('#aains').change(function(){
    $('#ayr').change(function(){
      $('#adept').change(function(){

    tinschk();
    ff();
          });  
        });
  });
  }
  else 
  {
    tinschk();
    ff();
  }
  });
function tinschk()
{
  var n = $("#t_ins").val();
  
  
    v1=true;
  

 return v1;

  }

function ff()
{
  console.log("ff");
  
  if( valid1 &&valid2 && valid3 && valid4 && v1 && valid5 && valid6)
  {
    console.log("if");
    $('.enableOnInput').prop('disabled', false); 
  }
  else
  {
    console.log("else");
    $('.enableOnInput').prop('disabled', true); 
  }
}


function addass(ass_no){
   var name = $('#aname').val();
   var startDate = $('#astartDate').val();
   var st = $('#ast').val();
   var endDate = $('#aendDate').val();
   var et = $('#aet').val();
   var nn = $('#ann').val();
   var marks = $('#amarks').val();
   var neg_marks = $('#aneg_marks').val();
   var tot_time = $('#atot_time').val();
   var t_ins = $('#t_ins').val();
   var ins = $('#ains').val();
   var cclass = $('#aclass').val();
   var gp = $('#agp').val();
   var ains = $('#aains').val();
   var yr= $('#ayr').val();
   var dept = $('#adept').val();
  
   valid1=anamechk();
   valid2=etchk();
   valid3=n_mchk();
   valid4=n_nchk();
   valid5=t_tchk();
   valid6=edchk();
   v1=tinschk();
      if(valid1&&valid2 && valid3 && valid4 && v1 && valid5 && valid6)
   {
   $.ajax({
      url:"scheass.php",
      type:'post',
      data: { 
        ass_no : ass_no,
          name : name,
          startDate : startDate,  
          st : st,
          endDate : endDate,
          et : et,
          nn : nn,
          marks : marks,
          neg_marks : neg_marks,
          tot_time : tot_time,
          t_ins : t_ins,
          ins : ins,
          cclass : cclass,
          gp : gp,
          ains : ains,
          yr : yr,
          dept : dept,         


       },

       success:function(data,status){
    
       windows.location.href="add_test.php";
       }


   });
 }
 


    
}
$(document).on('click','.update',function(e) {
      
   var id = $(this).attr("data-id");
   var name = $(this).attr("data-name");
   var startDate =$(this).attr("data-sd");
   var st =$(this).attr("data-st");
   var endDate =$(this).attr("data-ed");
   var et = $(this).attr("data-et");
   var nn =$(this).attr("data-noqn");
   var marks =$(this).attr("data-mark");
   var neg_marks = $(this).attr("data-negmark");
   var tot_time =$(this).attr("data-duration");

     $('#id').val(id);
     $('#name').val(name);
     $('#startDate').val(startDate);
     $('#st').val(st);
     $('#endDate').val(endDate);
    $('#et').val(et);
    $('#nn').val(nn);
    $('#marks').val(marks);
    $('#neg_marks').val(neg_marks);
    $('#tot_time').val(tot_time);
    
  });

function updateass(){
   var id = $('#id').val();
   var name = $('#name').val();
   var startDate = $('#startDate').val();
   var st = $('#st').val();
   var endDate = $('#endDate').val();
   var et = $('#et').val();
   var nn = $('#nn').val();
   var marks = $('#marks').val();
   var neg_marks = $('#neg_marks').val();
   var tot_time = $('#tot_time').val();
   var vvalid2;
   var vvalid3;
   var vvalid4;
   var vvalid5;
   vvalid2=etchk1();
   vvalid3=n_mchk1();
   vvalid4=n_nchk1();
   vvalid5=t_tchk1();
   console.log(vvalid2);
   console.log(vvalid3);
   console.log(vvalid4);
    if(vvalid2&&vvalid3&&vvalid4&&vvalid5)
   {
   $.ajax({
      url:"scheass.php",
      type:'post',
      data: { 
          id :id,
          name : name,
          startDate : startDate,  
          st : st,
          endDate : endDate,
          et : et,
          nn : nn,
          marks : marks,
          neg_marks : neg_marks,
          tot_time : tot_time,
         
       },

       success:function(data,status){
         readrecords();
         console.log(2);
       }

   });
   console.log(id);
 }
}
 function readrecords(){

$.ajax({
url:"scheass.php",
type:'post',


success:function(response){
$('#recorddisplay').html(response);
}
});
}
 function remove(deleteid){
        var conf = confirm("Are You Sure.You want to delete the user.");
        if(conf==true){
          $.ajax({
            url:"scheass.php",
            type:"post",
            data:{ deleteid:deleteid },
            success:function(data,status){
              readrecords();

            }

          });
        }
      }


</script>
  
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <script>


</script>
  
</body>

</html>