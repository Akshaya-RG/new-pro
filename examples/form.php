      
<?php
//session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include 'db.php';

//$unum=$_SESSION['unum'];
$unum="100";




$query="select * from user where un like '$unum'";

  $y=mysqli_query($db,$query);

while( $r = mysqli_fetch_assoc($y))
 { //$s=$r['pic'];
  $n=$r['un'];
  $m=$r['fn']." ".$r['ln'];
  $a=$r['fn'];
  $b=$r['ln'];
  $t=$r['t_ins'];
  $c=$r['dob'];
  $l=$r['gender'];
  $d=$r['phno'];
  $e=$r['email'];
  if($t=="clg")
  {
  $f=$r['dept'];
  $g=$r['yr'];
}
else
{
   $f=$r['gp'];
  $g=$r['class'];
}
}

?>
 <!DOCTYPE html>
<html>

<head>
  <style>
img {
  border-radius: 50%;
}

.inv {
    display: none;
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
<style>
.button1 {border-radius: 12px;}

  button {
  background-color: #5e72e4;
  color: white;
  border-radius:12px;
  padding: 14px 14px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.7;
}



/* Set a style for all buttons */
button {
  background-color: #9966ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
</style>


</head>

<body>   
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
           
            
          </ul>
           <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-single-02"></i>
                  <span>My profile</span>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                

                <a href="#!" class="dropdown-item">


              <div class="media align-items-center">
                  <img src="../examples/images/<?php echo $s; ?>" alt="Avatar" style="width:50px">

                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php   echo $m; ?></span>
                  </div>
                </div>
                  
                </a>

                <a href="#!" class="dropdown-item">
                 
                      <i class="ni ni-badge"></i>
                      <span><?php   echo $n; ?></span>
                   
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
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h3 class="display-2 text-white">Hello   !!!</h3>
            <p class="text-white mt-0 mb-5">This is your profile page. You can edit the details about you</p>
           
          </div>
        </div>
      </div>
    </div>







        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
                


               <div class="row align-items-center">
                <div class="col-10">
                  <h3 class="mb-0"> Edit Profile!... </h3>
                </div>
                
              </div>
               <hr class="my-4" />          
             <form  action="form.php"   method="post"  novalidate >

                          <div class="card-body">
             
                <h6 class="heading-small text-muted mb-4">Personal Details</h6>
                <div class="pl-lg-4">
                  <div class="row">

           

                           <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="firstname" class="form-control"    name="fn"  value="<?php echo $a; ?>" >
                         <h5 id="fncheck">  </h5>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name(Initials)</label>
                        <input type="text" id="lastname" class="form-control"    name="ln"  value="<?php echo $b; ?>" >
                     <h5 id="lncheck"></h5>
                      </div>
                    </div>






                           <?php
                       include 'db.php';
                        $query="select * from user where un like '$unum'";

  $y=mysqli_query($db,$query);




 while( $r = mysqli_fetch_assoc($y))
 {  
  $e=$r['email'];
  $n=$r['un'];
}
  ?>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">User Number</label>
                        <input type="text" id="input-username" class="form-control"  name="un"  value="<?php echo $n; ?>" >
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>

                        <input type="email" id="email" class="form-control" name="email" value="<?php echo $e; ?>"  >
                       <h5 id="emcheck" > </h5>
                      </div>
                    </div>
              
                  
                    
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">D.O.B</label>
                        <input type="date" id="input-first-name" class="form-control"    name="dob" value="<?php echo $c; ?>" >
                      </div>
                    </div>


                     <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-phone-number">phone number</label>
                        <input type="number" id="phno" class="form-control"   name="phno" value="<?php echo $d; ?>" >
                       <h5 id="pncheck"> </h5>
                      </div>
                    </div>    
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Select gender</label>
                    
                     <select id="gen"  class="form-control" required="please select type of institution"  name="gen"  value="<?php echo $l; ?>">
                     

                            
           <option value="">Select...</option>
            <option value="male"  <?php if($l=="male") echo 'selected="selected"'; ?> >male</option>
            <option value="female"  <?php if($l=="female") echo 'selected="selected"'; ?>>female</option>
             <option value="others"  <?php if($l=="others") echo 'selected="selected"'; ?>>others</option>";
           }
          
       
        </select>


                    

  
</div>
</div> 

                     <div class="col-lg-6">
                      <div class="form-group">

                        <div class="select-option">
                               <label class="form-control-label" for="input-first-name">Select Type of institute</label>
                           
                               <select id="t_ins"  class="form-control" required="please select type of institution"  name="t_ins" value="<?php echo $t; ?>">
            <option value="">Select...</option>
            <option value="school"   <?php if($t=="school") echo 'selected="selected"'; ?>>school</option>
            <option value="clg"  <?php if($t=="clg") echo 'selected="selected"'; ?>>college</option>
       
        </select>
  
      
     </div>
   </div>
 </div>
</div>
</div>



            <div id="school" class="inv">
              
        <hr class="my-4" />

          <h6 class="heading-small text-muted mb-4">Academic Details</h6>
                <div class="pl-lg-4">
                  <div class="row">

                    <div class="col-lg-7">
                      <div class="form-group">
                        <label class="form-control-label" >Institution name</label>
                      <select id="ins"  class="form-control" required="please select type of institution"  name="ins" value="<?php echo $h; ?>">
            <option value="">Select...</option>
            <option value="tvs"     <?php if($h=="tvs") echo 'selected="selected"'; ?> >tvs</option>
            <option value="vikaasa"  <?php if($h=="vikaasa") echo 'selected="selected"'; ?>>vikaasa</option>
           <option value="mahatma"   <?php if($h=="mahatma") echo 'selected="selected"'; ?>>mahatma</option>

       
                    </select>
  
                      </div>
                    </div>
                  
               

                  
                    <div class="col-lg-7">
                      <div class="form-group">
                        <label class="form-control-label" >Roll Number</label>
                        <input id="rno" class="form-control" type="text" name="rno" value="<?php echo $rno; ?>">
                      </div>
                    </div>
                 
               

                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" >class</label>
                         <select name="class"  class="form-control" value="<?php echo $g;?>">
                                    
                                     
                                    <option value="11"  <?php if($g=="11") echo 'selected="selected"'; ?>>XI</option>
                                     <option value="12" <?php if($g=="12") echo 'selected="selected"'; ?>>XII</option>
                                 </select>
                    </div>
                    </div>
                    

                
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">group</label>

                        <select id="gp"  name="gp"  class="form-control" value="<?php echo $f; ?>">
                                    <option value="cse" <?php if($f=="cse") echo 'selected="selected"'; ?>>cse</option>
                                    <option value="bio" <?php if($f=="bio") echo 'selected="selected"'; ?>>bio</option>
                                    <option value="commerce" <?php if($f=="commerece") echo 'selected="selected"'; ?>>commerce</option>
                                     
                        </select>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
               </div>


        


               
               <div id="clg" class="inv">
                <hr class="my-4" />
                 <h6 class="heading-small text-muted mb-4">Academic Details</h6>
                <div class="pl-lg-4">

                  <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" >Institution name</label>

                  <select id="ins"  class="form-control" required="please select type of institution"  name="ins" value="<?php echo $h; ?>">
            <option value="">Select...</option>
            <option value="klnce" <?php if($h=="klnce") echo 'selected="selected"'; ?>>klnce</option>
            <option value="klnit"  <?php if($h=="klnit") echo 'selected="selected"'; ?>>klnit</option>
           </select>
         </div>
          </div>
               

                  
               

                  
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" >Roll Number</label>
                        <input id="rno" class="form-control" type="text" name="rno" value="<?php echo $rno; ?>">
                      </div>
                    </div>
                 
               

                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" >Year</label>
                        <select id="gp"  name="yr"  class="form-control" value="<?php echo $g; ?>">
                                    <option value="1" <?php if($g=="1") echo 'selected="selected"'; ?>>I</option>
                                    <option value="2" <?php if($g=="2") echo 'selected="selected"'; ?> >II</option>
                                    <option value="3" <?php if($g=="3") echo 'selected="selected"'; ?>>III</option>
                                    <option value="4" <?php if($g=="4") echo 'selected="selected"'; ?>>1V</option>

                                     
                                </select>
                      </div>
                    </div>


                
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Department</label>
                      <select id="dept"  name="dept"  class="form-control"  value="<?php echo $f;?>">
                                    <option value="CSE" <?php if($f=="cse") echo 'selected="selected"'; ?>>CSE</option>
                                    <option value="IT" <?php if($f=="it") echo 'selected="selected"'; ?>>IT</option>
                                    <option value="EEE" <?php if($f=="eee") echo 'selected="selected"'; ?>>EEE</option>
                                     <option value="ECE" <?php if($f=="ece") echo 'selected="selected"'; ?>>ECE</option>
                                     <option value="MECH" <?php if($f=="mech") echo 'selected="selected"'; ?>>MECH</option>
                                    <option value="CIVIL" <?php if($f=="civil") echo 'selected="selected"'; ?>>CIVIL</option>
                                </select>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>


              
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





      <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">&nbsp &nbsp &nbsp About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                 
                    <textarea rows="4" class="form-control" placeholder="A few words about you ..."  name="abtme" value="<?php echo $abtme; ?>"></textarea>
                  </div>
                  <div>
                    <button type="submit"  class="button button1"  name="submit" style="vertical-align:middle"><span>submit !!!</span>
                    </button>
                  </div>
                   </div>
                 
                </div>
                 </form>
               </div>
             </div>
           </div>
           <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>

