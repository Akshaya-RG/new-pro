<?php
session_start();
$k=$_SESSION['k'];
include 'db.php';
$an=$_SESSION['ano'];
$ass_no=1;
$query="select * from admin where an like '$an'";
  $y=mysqli_query($db,$query);
 while( $r = mysqli_fetch_assoc($y))
 {$a=$r['an'];
  $b=$r['name'];
  $stss=$r['status'];
  $s=$r['pic'];
 }
?>
<html>

<head>
  <link rel="stylesheet" href="css/style.css">

  <script type="text/javascript">
 
    var prenom;

    function change(elem) {
            prenom =$( elem ).closest('tr').find('td:first').text();
            console.log(prenom);
            reaa();
            
   } 
   
  </script>
  <style type="text/css">

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
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 25%;
  top: 100%;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: scroll; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-left:400px;
  padding-right:200px;
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
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="view_admin.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">View Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">View user</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="sche_ass.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">View Scheduled Assessments</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="comp_ass.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">View Completed Assessments</span>
              </a>
            </li>
            
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
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
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?php
              if($stss='Superadmin')
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
            <!-- Card header -->
            <div class="card-header border-0">
              
           <center> <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary btn-lg" style="width:250px;">Add Question</button></center>
              
              <h2 class="mb-0">Ass.no:</h2>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Qn.no</th>
                    <th scope="col" class="sort" data-sort="budget">Question</th>
                    <th scope="col" class="sort" data-sort="status">Answer Key</th>
                    
                    <th></th>
                    <th scope="col" class="sort" data-sort="completion">Option</th>
                    <th></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <?php
                    date_default_timezone_set('Asia/Kolkata');
                    $today = date("Y-m-d"); 
                    $ttt=date('h:i:s');
                    $i=1;
                    if(isset($_GET['page']))
                     {
                       $page=$_GET['page'];
                       if($page==1)
                       {
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
                     $query="select * from qn where ass_no=$ass_no order by qn_no";
                     $res=mysqli_query($db,$query);
                     $count=mysqli_num_rows($res);
                     $per_page=5;
                     $no_of_page=ceil($count/$per_page);
                     $start=($page-1)*$per_page;
                     $query="select * from qn where ass_no=$ass_no order by qn_no limit $start,$per_page";
                     $y=mysqli_query($db,$query);
                     while( $r = mysqli_fetch_assoc($y))
                       {  $aa=$r['ass_no'];
                          $qno=$r['qn_no'];
                          $qn=$r['qn'];
                          $ans=$r['ans_key'];
                          
                        
                        echo '
          
                    <td>
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$k++.'</span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">'
                      .$qn.'
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status">'.$ans.'</span>
                      </span>
                    </td>
                    
                     <td>'?>
                        <a href="#editModal" class="edit" data-toggle="modal">
              <i class="material-icons update" data-toggle="tooltip" 
              data-id="<?php echo $aa ; ?>"
              data-qno="<?php echo $qno; ?>"
              data-qn="<?php echo $qn; ?>"
              data-ans="<?php echo $ans; ?>"
              
              title="Edit"><button class="btn btn-primary">Edit</button></i>
            </a>
                                         
                      
                        <div id="editModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="update_form">
          <div class="modal-header">            
            <h4 class="modal-title">Edit User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="id_u" name="id"  class="form-control" required>         
            <div class="form-group">
              <label>Question no</label>
              <input type="text" id="qno_u" name="qno"  class="form-control" required>
            </div>
            <div class="form-group">
              <label>Question</label>
              <input type="text" id="qn_u" name="qn" value="qn_u" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Answer</label>
              <input type="text" id="ans_u" name="ans" value="ans_u"  class="form-control" required>
            </div>
                     
          </div>
          <div class="modal-footer">
          <input type="hidden" value="2" name="type">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <button type="submit" class="btn btn-info" onclick="updateqns(<?php echo $aa ?> )"  id="update">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
                                    
                      <?php 
                      echo'
                    </td>
                      <td> 
                        <button   class="btn btn-danger" value='.$aa.' name="but11" style="vertical-align:middle" onclick="remove('.$qno.','.$aa.')"><span>Remove</span></button> </td>
                                         
                      
                    </td><td></td><td></td>';
                    echo "</tr>";
                  }
                  ?> 
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
      <a class="page-link" href="edit_qns.php?page=<?php echo $page-1; ?>" tabindex="-1">
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
           ><a class="page-link" href="edit_qns.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
      <a class="page-link" href="edit_qns.php?page=<?php echo $page+1; ?>">
        <i class="fa fa-angle-right"></i>
        
      </a>
    </li>
  </ul>
</nav>
           
            </div>
            <!-- Card footer -->
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="id01" class="modal">

  <form class="modal-content animate" >
  
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
       <h2 class="mb-0">Assessment  :  <?php echo $aa; ?></h2>
            <br>
            
            
                 <br>
             
                 Question no  
                  :   
                  <input type="text" name="qno" id='qno' required>  <br>
              
                 Question  
                  :   
                 <input type="text" name="qn" id='qn' required>  <br>
             
                 Answer 
                  :   
                  <input type="text" name="ans" id='ans' required>  <br>
              
                <div id='ll'></div>
        <div class="btn-block">
       <button type='button' id="btn2" >Add 1 keyword</button>
       
       </div>

      <button type="submit" id='next' style="width: 50%" onclick="addqns(<?php echo $aa ; ?>)">Add</button>
      
    </div>

    

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                     
<script>
$(document).ready(function(){
  

  $("#btn2").click(function(){
    $("#ll").append("<input type='text' name='levels[]'><br><br>");
  });
});
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {

    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>


  <script>
 
$(document).on('click','.update',function(e) {
    var id=$(this).attr("data-id");
    var qn=$(this).attr("data-qn");
    var qno=$(this).attr("data-qno");
    var ans=$(this).attr("data-ans");
    
    $('#id_u').val(id);
    $('#qn_u').val(qn);
    $('#qno_u').val(qno);
    $('#ans_u').val(ans);
  });
function addqns(ass_no){
   
   var qno = $('#qno').val();
   var qn = $('#qn').val();
   var ans = $('#ans').val();
   var levels = $("input[name='levels[]']").val();
   
  console.log(levels);

   $.ajax({
      url:"editqns.php",
      type:'post',
      data: { 
          qno : qno,
          qn : qn,  
          ans : ans,
          levels :levels,
          ass_no : ass_no,
          
       },

       success:function(data,status){
         readrecords();
       }

   });
}
function updateqns(ass){
   
   var qno_u=$('#qno_u').val();
   var qn_u = $('#qn_u').val();
   var ans_u = $('#ans_u').val();
  
   $.ajax({
      url:"editqns.php",
      type:'post',
      data: { 
          
          ass : ass,
          qno_u:qno_u,
          qn_u : qn_u,  
          ans_u : ans_u,
          
       },

       success:function(data,status){
         readrecords();

       }


   });
   console.log(qn_u); 
}
 function readrecords(){

$.ajax({
url:"editqns.php",
type:'post',


success:function(response){
$('#recorddisplay').html(response);
}
});
}
 function remove(deleteid,ass){
        var conf = confirm("Are You Sure.You want to delete the user.");
        if(conf==true){
          $.ajax({
            url:"editqns.php",
            type:"post",
            data:{ deleteid:deleteid,
            ass :ass, },
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