<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include 'db.php';


$un=$_SESSION['uname'];
$t_ins=$_SESSION['t_ins'];
$dept=$_SESSION['dept'];
$class=$_SESSION['yr'];
$ins=$_SESSION['ins'];
$k=$_SESSION['k'];




$query="select * from user where un like '$un'";
  $y=mysqli_query($db,$query);
while( $r = mysqli_fetch_assoc($y))
 {
  $n=$r['un'];
  $m=$r['fn']." ".$r['ln'];
  $s=$r['pic'];
   $gen=$r['gender'];
}
if(isset($_POST['but1']))
{
  $l=$_POST['but1'];
$_SESSION['l']=$l;
}
else
{
  $l=$_SESSION['l'];
}
?>
<html>

<head>
   <style type="text/css">
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
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

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
  position: fixed; /* Stay in place */
  z-index: 5; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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
@media screen and (max-width: 100px) {
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



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

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
                  <span><?php echo $n; ?></span>
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
              <h6 class="h2 text-white d-inline-block mb-0">User</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Ranking</a></li>
                  
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
            <!-- Card header -->
            <div class="card-header border-0">
              <?php
                $date=date('d/m/Y');
                     if($l=='all')
                     {echo'
                 <h2 class="mb-0">Overall Ranking</h2>
                 <h2 class="mb-0">As on date: '.$date.'</h2>';
                 }
                 else{
                     $query="select * from post_ans where ass_no ='$l';";
                     $y=mysqli_query($db,$query);
                     while( $r = mysqli_fetch_assoc($y))
                     {
                      $ass_name=$r['ass_name'];
                      $s_date=$r['s_date'];
                      $timestamp = strtotime($s_date);
                      $n_date = date("d/m/Y", $timestamp);
                     }
                     echo'
                 <h3 class="mb-0">Title of Assessment : '.$ass_name.'</h3><br>
                 <h3 class="mb-0">Date : '.$n_date.'</h3>';
               }
               ?>


            </div>
            <!-- Light table -->
            <div class="table-responsive">
              
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">S.no</th><th></th>
                    <th scope="col" class="sort" data-sort="budget">Name</th><th></th>
                    <th scope="col" class="sort" data-sort="status">Total Score</th><th></th>
                    <th scope="col" class="sort" data-sort="status">Rank</th>
                    <th scope="col">Batch</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <?php
                    $i=1;
                    if(isset($_GET['page']))
                     {
                       $page=$_GET['page'];
                       if($page==1)
                       {
                        $_SESSION['jj']=0;
                        $k=1;
                       }
                       else
                       {
                        $k=(($page-1)*5)+1;
                       }
                       $page=mysqli_real_escape_string($db,$page);
                       $page=htmlentities($page);
                     }
                     else{
                       $page=1;
                     }
                    $n=1;
                    $j=$_SESSION['jj'];
                    $cnt=0;
                     
                     if($l=='all')
                     {
                      $query="select sum(marks_scored)/count(ass_no) as m,fn,ln,result.un from result inner join user on result.un=user.un group by result.un order by m desc";
                      $res=mysqli_query($db,$query);
                     $count=mysqli_num_rows($res);
                     $per_page=5;
                     $no_of_page=ceil($count/$per_page);
                     $start=($page-1)*$per_page;
                     $query="select sum(marks_scored)/count(ass_no) as m,fn,result.un,ln,batch from result inner join user on result.un=user.un group by result.un order by m desc limit $start,$per_page";
                      $y=mysqli_query($db,$query);
                     while( $r = mysqli_fetch_assoc($y))
                       {  while($n!=0)
                        {
                          $_SESSION['m']=$r['m'];
                          $n=0;
                          $cnt=0;
                        }
                         $uun=$r['un']; 

                          $un=$r['fn'].$r['ln'];
                          $mark=$r['m'];
                           $qq="select count(batch) as ll from result where batch like 'Gold' and un like '$uun' ";
                           $y1=mysqli_query($db,$qq);
                     while( $r1 = mysqli_fetch_assoc($y1))
                     {
                        $bc=$r1['ll'];
                     }
                          echo'
                          <td>
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$k++.'</span>
                        </div>
                      </div>
                    </td>
                    <td></td>
                    <td class="budget">'
                      .$un.'
                    </td>
                    <td></td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status">'.$mark.'</span>
                      </span>
                    </td>
                    <td></td>
                    <td>';
                    if($_SESSION['m']==$mark){
                      if($cnt==0)
                      {
                        $j++;
                      }
                     echo'
                      <span class="status">'.$j.'</span>';
                      $n=0;
                      $cnt++;
                     
                    }
                    else
                    {
                      $n=1;
                       echo'
                      <span class="status">'.++$j.'</span>';
                      $_SESSION['jj']=$j;
                    }
                    echo'
                    </td>   
                    <td>
                  
                        <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../examples/images/Gold.jpeg">
                  </span> &nbsp &nbsp-&nbsp &nbsp '.$bc.'
                         
                      
                    </td>
                     <td></td>';
                    echo "</tr>";
                  
                  
                }

                     }
                   else{
                     $query="select * from result inner join user on ass_no ='$l' and result.un=user.un order by marks_scored desc";
                     $res=mysqli_query($db,$query);
                     $count=mysqli_num_rows($res);
                     $per_page=5;
                     $no_of_page=ceil($count/$per_page);
                     $start=($page-1)*$per_page;
                     $query="select * from result inner join user on ass_no ='$l' and result.un=user.un order by marks_scored desc limit $start,$per_page";
                     $y=mysqli_query($db,$query);
                     while( $r = mysqli_fetch_assoc($y))
                       { while($n!=0)
                        {
                          $_SESSION['m']=$r['marks_scored'];
                          $n=0;
                        }  
                        $aa=$r['ass_no'];
                          $un=$r['fn'].$r['ln'];
                          $mark=$r['marks_scored'];
                           $bat=$r['batch'];                      
                        echo '
          
                    <td>
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$k++.'</span>
                        </div>
                      </div>
                    </td>
                    <td></td>
                    <td class="budget">'
                      .$un.'
                    </td>
                    <td></td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status">'.$mark.'</span>
                      </span>
                    </td>
                    <td></td>
                    <td>';
                       if($_SESSION['m']==$mark){
                         if($cnt==0)
                      {
                        $j++;
                      }
                     echo'
                      <span class="status">'.$j.'</span>';
                      $n=0;
                      $cnt++;
                    }
                    else
                    {
                      $n=1;
                       echo'
                      <span class="status">'.++$j.'</span>';
                      $_SESSION['jj']=$j;
                      
                    }
                    echo'
                    </td>   
                     </td>   
                    <td>
                     ';
                     if($bat=='none' or $bat==NULL){
                     echo 'NONE'; 
                  }
                  else
                  {
                    
                    echo'
                        <span class="avatar avatar-sm rounded-circle">
                     
                    <img alt="Image placeholder" src="../examples/images/'.$bat.'.jpeg">
                  </span> ';
                  }
                         
                   echo'   
                    </td>
                     <td></td>';
                    echo "</tr>";
                  
                  
                }
              }
                  ?>
                    
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td>
                     <form action="ranks.php "  method="post">
                   <button  class="button button1" style="vertical-align:middle"><span>Back</span></button>
                   </form>
                 </td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 </tr> 
                 
                </tbody>
              </table>
              <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li 
    <?php
       if($page==1)
       {
         echo "class='page-item disabled'";
       }  
       else{
         echo "class='page-item'";
       }
    ?>
    >
      <a class="page-link" href="rank_individual.php?page=<?php echo $page-1; ?>" tabindex="-1">
        <i class="fa fa-angle-left"></i>
      </a>
    </li>
    <?php
      for($i=1;$i<=$no_of_page;$i++)
      {
        ?>
           <li
            <?php 
              if($page==$i)
              {
              echo "class='page-item active'";
              }
              else{
                echo "class='page-item'";
              }

            ?>
           ><a class="page-link" href="rank_individual.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
      }
    ?>
   
    <li 
    <?php
       if($page==$no_of_page)
       {
         echo "class='page-item disabled'";
       }  
       else{
         echo "class='page-item'";
       }
    ?>
    >
      <a class="page-link" href="rank_individual.php?page=<?php echo $page+1; ?>">
        <i class="fa fa-angle-right"></i>
        
      </a>
    </li>
  </ul>
</nav>
            </form>
            </div>
            <!-- Card footer -->
            
          </div>
        </div>
      </div>
    </div>
  </div>

  
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
  
  
</body>

</html>