<?php
session_start();
?>
<?php
include 'db.php';

$name=$_SESSION['uname'];
$aa= $_SESSION['t_ins'];
$yr=$_SESSION['yr'];
$dept=$_SESSION['dept'];
$ins=$_SESSION['ins'];

$query="select * from user where un like '$name'";
  $y=mysqli_query($db,$query);


 if($aa=='clg')
 {
     $dep='department';
     $yr='yr';
}

 else
 {
  $dep='group';
  $yr='class';
 }

if($aa=='clg')
{
 while( $r = mysqli_fetch_assoc($y))
 {$s=$r['pic'];
  $n=$r['rno'];
  $m=$r['fn']." ".$r['ln'];
  $a=$r['fn'];
  $b=$r['ln'];
  $c=$r['dob'];
 $timestamp = strtotime($c);
  $c = date("d-m-Y", $timestamp);
  $d=$r['phno'];
  $e=$r['un'];
  $f=$r['dept'];
  $g=$r['yr'];
  $h=$r['ins'];
  $abtme=$r['abtme'];
  $gen=$r['gender'];

 }
}
 else
 {
  while( $r = mysqli_fetch_assoc($y))
 {$s=$r['pic'];
  $n=$r['rno'];
  $m=$r['fn']." ".$r['ln'];
  $a=$r['fn'];
  $b=$r['ln'];
 $c=$r['dob'];
 $timestamp = strtotime($c);
  $c = date("d-m-Y", $timestamp);
  $d=$r['phno'];
  $e=$r['un'];
  $f=$r['gp'];
  $g=$r['class'];
  $h=$r['ins'];
  $abtme=$r['abtme'];
  $gen=$r['gender'];
 
 
 }

 
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Quiz</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<style>
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
  font-size: 15px;
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
img {
  border-radius: 50%;
}


</style>
<script src="on.js"></script>
<body  onunload="ajaxFunction()">
  <!-- Sidenav -->
 <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom" style="background-color:black">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
              <a class="nav-link active" href="dashboard2.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a><br>
        <a class="nav-link" href="profile_user.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a><br>
        <a class="nav-link" href="tables2.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">scheduled  assessments</span>
              </a><br>
        <a class="nav-link" href="comp_ass2.php">
               <i class="ni ni-collection"  style="color:green;"></i>
                     
                <span class="nav-link-text">Completed assessments</span>
              </a><br>
        <a class="nav-link" href="ranks.php">
           
                    <i class="ni ni-chart-bar-32" style="color:red;"></i>
                    
                      <span  class="nav-link-text" > Ranking</span>
                 
              </a>
</div>
<span style="font-size:30px;color: #FFFFFF;cursor:pointer" onclick="openNav()" >&#9776; </span>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              
            </li>
           
       <div class="main-content" id="panel">
    <!-- Topnav -->
    
      
            
            
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
                <a href="#!" class="dropdown-item">
                  <div class="media align-items-center">
                      <?php
                    if($gen=='male')
                    {
                      echo
                    '<span class="avatar avatar-sm rounded-circle">
                  


                    <img alt="Image placeholder" src="images/male.png">
                  </span>';
                }
                elseif($gen=='female')
                {
                  echo '<span class="avatar avatar-sm rounded-circle">
                  

                    <img alt="Image placeholder" src="images/female.png">
                  </span>';

                }
                else
                {
                   echo '<span class="avatar avatar-sm rounded-circle">
                  

                    <img alt="Image placeholder" src="images/'.$s.'>
                  </span>';

                }
                ?>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $m; ?></span>
                  </div>
                </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-badge"></i>
                  <span><?php echo $e; ?></span>
                </a>
                <a href="change_pass.php" class="dropdown-item">
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
                <a href="frontpage.php" class="dropdown-item">
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
    <div class="header pb-6 d-flex align-items-center" style="background-image:url(images/bimage.jpeg);background-size: cover";>
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h3 class="display-2 text-white">Hello <?php echo $a; ?> !!!</h3>
            <p class="text-white mt-0 mb-5">This is your profile page. You can edit the details about you</p>
            <form  action="edit_userprofile.php" method="post">
              <button href="#!" class="btn btn-neutral"  type= "submit"   name="edit" >Edit profile</button><br><br>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
   <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <?php 

                     include 'db.php';
                    $sql = "SELECT * FROM user WHERE un = '$name' ";
                    $sth = mysqli_query($db,$sql);
                    $result=mysqli_fetch_array($sth);
                       
                   if($result['pic']== null)
				   {
				 if($gen=='male')
                    {
                      echo
                    '<img alt="Image placeholder" src="images/male.png">';
                }
                elseif($gen=='female')
                {
                  echo '<img alt="Image placeholder" src="images/female.png">';

                }
                else
                {
                   echo '<img alt="Image placeholder" src="images/'.$s.'>';

                }
                 
				   }					   
                   else{
				   echo'<img src="images/'.$result['pic'].' " alt="Image" class="rounded-circle">';
				   }
                    
                    ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                   
                    
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  <span class="font-weight-light">,  
                   
                   <?php

                   $interval = date_diff(date_create(), date_create($c)); echo $interval->format("You are %Y Year, %M Months, %d Days Old");



                  ?>
                     
                   </span>
                </h5>
                
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Student at <?php echo $h; ?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i> belongs to -  <?php echo $f." ".$dep;?><br>
                
                </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"> Profile </h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">

                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <span class="form-control" id="basic-addon3"><?php echo $a; ?></span>
                       
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">

                        <label class="form-control-label" for="input-last-name">Last name</label>
                         <span class="form-control" id="basic-addon3"><?php echo $b; ?></span>
                      
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">D.O.B</label>
                         <span class="form-control" id="basic-addon3" ><?php echo $c; ?></span>
                     
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                         <span class="form-control" id="basic-addon3"><?php echo $e; ?></span>
                       
                      </div>
                    </div>
                    
                
                  
                    
                    

                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">phone number</label>
                         <span class="form-control" id="basic-addon3"><?php echo $d; ?></span>
                       
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                         <label class="form-control-label" for="input-last-name">Roll number</label>
                         <span class="form-control" id="basic-addon3"><?php echo $n; ?></span>
                    
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Academic Details</h6>
                <div class="pl-lg-4">
                 
                        <?php
                          
                        if($aa=='clg')
                        {
                        echo '
                         <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Institution name</label>
                           
                         <select id="ins"  class="form-control" required="please select type of institution"  name="ins" value='. $h. 'disabled="disabled" >
              <option value="klnce" disabled ';     if($h=="klnce")  echo 'selected="selected"'; echo ' >klnce</option>
            <option value="klnit" disabled';      if($h=="klnit")   echo ' selected="selected"';echo '  >klnit</option>
           <option value="velammal" disabled';   if($h=="velammal") echo ' selected="selected"'; echo ' >velammal</option>
           </select>
            </div>
              </div>
            </div>
             

             <div class="row">
                    
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">year</label>
                         <select id="yr"  class="form-control" required="please select yr"  name="yr" value='. $g. 'disabled="disabled" >
                       
             <option value="1" disabled ';  if($g=="1")  echo 'selected="selected"'; echo ' >I</option>
            <option value="2" disabled';    if($g=="2")   echo ' selected="selected"';echo '  >II</option>
              <option value="3" disabled';  if($g=="3")  echo 'selected="selected"'; echo ' >III</option>
            <option value="4" disabled';    if($g=="4")   echo ' selected="selected"';echo '  >IV</option>
                  </select>


                         
                      </div>
                    </div>
                    </div>
                   <div class="row">
                    
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">deparment</label>
                         <select id="dep"  class="form-control" required="please select deparment"  name="dep" value='. $f. 'disabled="disabled">



                        
             <option value="CSE" disabled '; if($f=="CSE")  echo 'selected="selected"'; echo ' >CSE</option>
            <option value="IT" disabled';  if($f=="IT")   echo ' selected="selected"';echo '  >IT</option>
           <option value="EEE" disabled';   if($f=="EEE") echo ' selected="selected"'; echo ' >EEE</option>
             <option value="ECE" disabled'; if($f=="ECE")  echo 'selected="selected"'; echo ' >ECE</option>
            <option value="MECH" disabled';  if($f=="MECH")   echo ' selected="selected"';echo '  >MECH</option>
           <option value="CIVIL" disabled';   if($f=="CIVIL") echo ' selected="selected"'; echo ' >CIVIL</option>


                                  
                  </select>


                         
                      </div>
                    </div>
                    </div>


           
                 ';
                }
                else

                {

                 echo '
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                     <label class="form-control-label" for="input-address">Institution name</label>
                      <select id="ins"  class="form-control" required="please select type of institution"  name="ins" value='. $h. ' disabled>
                    
             <option value="tvs" disabled';     if($h=="tvs")  echo 'selected="selected"'; echo ' >tvs</option>
            <option value="vikaasa" disabled';  if($h=="vikaasa")   echo ' selected="selected"';echo '  >vikaasa</option>
           <option value="mahatma" disabled';   if($h=="mahatma") echo ' selected="selected"'; echo ' >mahatma</option>

           </select>
           </div>
         </div>
         </div>
                 <div class="row">
                    
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">class</label>
                         <select id="class"  class="form-control" required="please select class"  name="class" value='. $g. '  disabled>
                         
              
             <option value="11" disabled';  if($g=="11")  echo 'selected="selected"'; echo ' >XI</option>
            <option value="12" disabled';  if($g=="12")   echo ' selected="selected"';echo '  >XII</option>
          

                  </select>


                         
                      </div>
                    </div>
                    </div>



                    <div class="row">
                    
                    <div class="col-lg-8">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">group</label>
                         <select id="class"  class="form-control" required="please select group"  name="class" value='. $f. '  disabled>
                         
               
             <option value="bio" disabled';     if($f=="bio")  echo 'selected="selected"'; echo ' >bio</option>
            <option value="cse" disabled';      if($f=="cse")   echo ' selected="selected"';echo '  >cse</option>
           <option value="commerece" disabled'; if($f=="commerece") echo ' selected="selected"'; echo ' >commerece</option>

                                     

                  </select>


                         
                      </div>
                    </div>
                    </div>





           ';
            



                }
                  ?>
                      
                  
            

              
             </div>
                  <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>

                    <input type="text"  class="form-control" placeholder="A few words about you ..." value="<?php echo $abtme; ?>">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>