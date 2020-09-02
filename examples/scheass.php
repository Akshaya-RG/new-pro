<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include 'db.php';
include 'adb.php';
$k=$_SESSION['k'];
$an=$_SESSION['ano'];
 $output1 = preg_split("/( |,|\n)/", $scheass );
        $user1 = array();
        for ($x = 0; $x < sizeof($output1); $x++) {
            array_push($user1,$output1[$x]) ;
            if($user1[$x]=='edit')
              $n1=1;
            else if($user1[$x]=='remove')
              $n2=1;
            
          }
          
extract($_POST);
$dd=date("Y:m:d H:i:s");
if(isset($_POST['ass_no'])&&isset($_POST['name'])&&isset($_POST['startDate'])&&isset($_POST['st'])&&isset($_POST['endDate'])&&isset($_POST['et'])&&isset($_POST['nn'])&&isset($_POST['marks'])&&isset($_POST['neg_marks'])&&isset($_POST['tot_time'])&&isset($_POST['t_ins'])&&isset($_POST['ins'])&&isset($_POST['cclass'])&&isset($_POST['gp'])&&isset($_POST['ains'])&&isset($_POST['yr'])&&isset($_POST['dept']))
{
  
   $_SESSION['no']=$nn;
   if($t_ins=='clg')
   {
 $sql="INSERT INTO `post_ans` (`ass_no`, `ass_name`, `s_date`, `s_time`, `e_date`, `e_time`, `no_of_qn`, `mark`, `neg_mark`, `tot_time`,`t_ins`, `ins`, `class`, `yr`, `gp`, `dept`,`status`,`created_by`) VALUES ( $ass_no,'$name', '$startDate', '$st', '$endDate', '$et', '$nn', '$marks', '$neg_marks', '$tot_time','$t_ins','$ains','$cclass','$yr','$gp','$dept','not uploaded','$an');";
   }
   else
   {

 $sql="INSERT INTO `post_ans` (`ass_no`, `ass_name`, `s_date`, `s_time`, `e_date`, `e_time`, `no_of_qn`, `mark`, `neg_mark`, `tot_time`,`t_ins`, `ins`, `class`, `yr`, `gp`, `dept`,`status`,`created_by`) VALUES ( $ass_no,'$name', '$startDate', '$st', '$endDate', '$et', '$nn', '$marks', '$neg_marks', '$tot_time','$t_ins','$ins','$cclass','$yr','$gp','$dept','not uploaded','$an');";
   }

    if(mysqli_query($db,$sql))
    {
       echo "<script type= 'text/javascript'>alert('Registered successfully')</script>";
    }
}
if(isset($_POST['deleteid']))
{
  $uid=$_POST['deleteid'];
  mysqli_query($db,"UPDATE post_ans SET `deleted_by` = '$an', `is_deleted` = 'deleted', `deleted_on` = '$dd' WHERE ass_no = '$uid'");
  echo "<script type= 'text/javascript'>alert('Data Deleted Successfully ')</script>";
}
if(isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['startDate'])&&isset($_POST['st'])&&isset($_POST['endDate'])&&isset($_POST['et'])&&isset($_POST['nn'])&&isset($_POST['marks'])&&isset($_POST['neg_marks'])&&isset($_POST['tot_time']))
{   $ass_no=$_POST['id'];
  $qq="UPDATE post_ans SET  `updated_by` = '$an',`updated_on` = '$dd' , no_of_qn = '$nn',tot_time='$tot_time',s_date='$startDate',s_time='$st',e_date='$endDate',e_time='$et',mark='$marks',neg_mark='$neg_marks' WHERE ass_no='$ass_no';";
if (mysqli_query($db,$qq)) {   
        echo "<script type= 'text/javascript'>alert('Profile Updated')</script>";
     }
 }
?>
  
                    <?php
                    $q = $_GET['q'];
                    $page=$_SESSION['pg'];
                    $cnt = mysqli_query($db,"SELECT max(ass_no) as dash FROM post_ans");
                    while($rrr=mysqli_fetch_assoc($cnt))
                    {
                      $rr=$rrr['dash'];
                    }
                    $row= $rr+1;
                    $_SESSION['ass_no']=$row;
                    date_default_timezone_set('Asia/Kolkata');
                    $today = date("Y-m-d"); 
                    $ttt=date('h:i:s');
                    $i=1;
                    if($page)
{
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
                     echo '<div class="table-responsive">
              
              <table class="table align-items-center table-flush" id="tab">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">S.no</th>
                    <th scope="col" class="sort" data-sort="budget">Title</th>
                    <th scope="col" class="sort" data-sort="status">Total Questions</th>
                    <th scope="col" class="sort" data-sort="status">Total Duration</th>
                    <th scope="col">status</th>';
                    if($_SESSION['stss']=='Superadmin')
                  {echo'
                    <th>Created_by</th>';
                  }
                  echo'
                    <th scope="col" class="sort" data-sort="completion">Option</th>
                    <th></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>';
                  if($_SESSION['stss']=='Superadmin')
                  {
                   if($q!='')
                     {
                       $query="SELECT * FROM post_ans WHERE ass_no LIKE  '$q%' or ass_name  LIKE  '$q%' or s_date  LIKE  '$q%'  or t_ins  LIKE  '$q%' or  and (e_date>'$today' or (e_date='$today' and e_time>='$ttt')) and is_deleted like 'not deleted'  ";
                        mysqli_query($db,$query);
                       }
                       else
                       {
                     $query="select * from post_ans where (e_date>'$today' or (e_date='$today' and e_time>='$ttt')) and is_deleted like 'not deleted'  ";

                     $res=mysqli_query($db,$query);
                     $count=mysqli_num_rows($res);
                     $per_page=5;
                     $no_of_page=ceil($count/$per_page);
                     $start=($page-1)*$per_page;
                   }
                     if($q!='')
                     {
                       $query="SELECT * FROM post_ans WHERE ass_no LIKE  '$q%' or ass_name  LIKE  '$q%' or s_date  LIKE  '$q%'  or t_ins  LIKE  '$q%'  and (e_date>'$today' or (e_date='$today' and e_time>='$ttt')) and is_deleted like 'not deleted'  ";
                        
                        $y = mysqli_query($db,$query);
                       $k=1;
                       }
                       else
                       {
                     $query="select * from post_ans where (e_date>'$today' or (e_date='$today' and e_time>='$ttt')) and is_deleted like 'not deleted' limit $start,$per_page";
                     $y=mysqli_query($db,$query);
                      }
                    }
                    else
                    {
                      if($q!='')
                     {
                       $query="SELECT * FROM post_ans WHERE ass_no LIKE  '$q%' or ass_name  LIKE  '$q%' or s_date  LIKE  '$q%'  or t_ins  LIKE  '$q%' or  and (e_date>'$today' or (e_date='$today' and e_time>='$ttt')) and is_deleted like 'not deleted' and created_by='$an' ";
                        mysqli_query($db,$query);
                       }
                       else
                       {
                     $query="select * from post_ans where (e_date>'$today' or (e_date='$today' and e_time>='$ttt')) and is_deleted like 'not deleted' and created_by='$an' ";

                     $res=mysqli_query($db,$query);
                     $count=mysqli_num_rows($res);
                     $per_page=5;
                     $no_of_page=ceil($count/$per_page);
                     $start=($page-1)*$per_page;
                   }
                     if($q!='')
                     {
                       $query="SELECT * FROM post_ans WHERE ass_no LIKE  '$q%' or ass_name  LIKE  '$q%' or s_date  LIKE  '$q%'  or t_ins  LIKE  '$q%'  and (e_date>'$today' or (e_date='$today' and e_time>='$ttt')) and is_deleted like 'not deleted' and created_by='$an' ";
                        
                        $y = mysqli_query($db,$query);
                       $k=1;
                       }
                       else
                       {
                     $query="select * from post_ans where (e_date>'$today' or (e_date='$today' and e_time>='$ttt')) and is_deleted like 'not deleted' and created_by='$an' limit $start,$per_page";
                     $y=mysqli_query($db,$query);
                      }
                    }

                     while( $r = mysqli_fetch_assoc($y))
                       {  $aa=$r['ass_no'];
                          $created_by=$r['created_by'];
                          if($r['s_date']==$today and $ttt <= $r['s_time'])
                          {
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                          $sd=$r['s_date'];
                          $st=$r['s_time'];
                          $ed=$r['e_date'];
                          $et=$r['e_time'];
                          $mark=$r['mark'];
                          $neg_mark=$r['neg_mark'];

                          
                        echo '
                         
          
                    <td>
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$k++.'</span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">'
                      .$name.'
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status">'.$no_qn.'</span>
                      </span>
                    </td>
                    <td>
                      <span class="status">'.$duration.'</span>
                    </td>
                    <td>
                      <span class="status">Scheduled on<br> '.$sts.'</span>
                    </td>
                    <td>';
                    if($_SESSION['stss']=='Superadmin')
                  {echo'
                      <span class="status"> '.$created_by.'</span>
                      ';
                    }
                    echo'
                    </td>
                    
                     <td>'?>
                     <?php

                    if($n1==1 || $stss=="Superadmin")
                      {
                        ?>
                         <a href="#editModal" class="edit" data-toggle="modal">
              <i class="material-icons update" data-toggle="tooltip" 
              data-id="<?php echo $aa ; ?>"
              data-name="<?php echo $name; ?>"
              data-noqn="<?php echo $no_qn; ?>"
              data-duration="<?php echo $duration; ?>"
              data-sts="<?php echo $sts; ?>"
              data-sd="<?php echo $sd; ?>"
              data-st="<?php echo $st; ?>"
              data-ed="<?php echo $ed; ?>"
              data-et="<?php echo $et; ?>"
              data-mark="<?php echo $mark; ?>"
              data-negmark="<?php echo $neg_mark; ?>" 
              
              title="Edit"><button class="btn btn-primary">Edit</button></i>
            </a>
            <?php
          }
            ?>
                                         
                      
                                     <div id="editModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="update_form" action="edit_qns.php" method="post">
          <div class="modal-header">            
            <h4 class="modal-title">Edit User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <br>
            
            
                 Assessment.no   
                  :   
                   <input type="text" name="id" id='id' >  <br>
             
                 Title   
                  :   
                  <input type="text" name="name" id='name' disabled>  <br>
              
                 Schedule date   
                  :   
                 <input type="date" name="startDate" id='startDate' min="<?php echo $today;?>" required>  <br>
             
                 Schedule time   
                  :   
                  <input type="time" name="st" id='st' required>  <br>
              
                 Freeze date   
                  :   
                   <input type="date" name="endDate" id='endDate' min="<?php echo $today; ?>" required>  <br>
                
                     <h5 id="rresult" ></h5> <br> 
              
                 Freeze time   
                  :   
                  <input type="time" name="et"  id='et' required> <br> 
                
                       <h5 id="rresult3"></h5> 
              
                 No.of.Questions   
                  :   
                  <input type="number" name="nn" id='nn' required><br>  
                
                     <h5 id="rresult2"></h5> <br>
                       
              
                 Marks   
                  :   
                  <input type="number" name="marks" id='marks' required>  <br>
              
                 Neg.Marks   
                  :   
                  <input type="number" name="neg_marks" id='neg_marks' required>  
                <br>
                     <h5 id="rresult1" ></h5>
             <br>
                 Total time(mins)  : <input type="number" name="tot_time" id="tot_time" required><br>
              <h5 id="rresult5"></h5> <br>
       <button type="submit" id='id' name='update' class="enableOnInput" style="width: 50%" onclick="updateass()">Update</button>
       </div>
        </form>
      </div>
    </div>
  </div>
                      <?php


                    if($n2==1 || $stss=="Superadmin")
                      {
                       
                      echo'
                    </td>
                       <td>
                        <button   class="btn btn-danger" value='.$aa.' name="but11" style="vertical-align:middle" onclick="remove('.$aa.')"><span>Remove</span></button> </td>
                                         
                      
                    </td>
                    <td></td>';
                  }
                    echo "</tr>";
                  
                }
                  else if($r['s_date']>$today )
                          {
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                          $sd=$r['s_date'];
                          $st=$r['s_time'];
                          $ed=$r['e_date'];
                          $et=$r['e_time'];
                          $mark=$r['mark'];
                          $neg_mark=$r['neg_mark'];
                        
                        echo '
          
                    <td>
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$k++.'</span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">'
                      .$name.'
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status">'.$no_qn.'</span>
                      </span>
                    </td>
                    <td>
                      <span class="status">'.$duration.'</span>
                    </td>
                    <td>
                      <span class="status">Scheduled on<br> '.$sts.'</span>
                    </td>
                    <td>
                      ';
                    if($_SESSION['stss']=='Superadmin')
                  {echo'
                      <span class="status"> '.$created_by.'</span>
                      ';
                    }
                    echo'
                    </td>
                     <td>'
                       ?>
                       <?php

                    if($n1==1 || $stss=="Superadmin")
                      {
                        ?>
                         <a href="#editModal" class="edit" data-toggle="modal">
              <i class="material-icons update" data-toggle="tooltip" 
              data-id="<?php echo $aa ; ?>"
              data-name="<?php echo $name; ?>"
              data-noqn="<?php echo $no_qn; ?>"
              data-duration="<?php echo $duration; ?>"
              data-sts="<?php echo $sts; ?>"
              data-sd="<?php echo $sd; ?>"
              data-st="<?php echo $st; ?>"
              data-ed="<?php echo $ed; ?>"
              data-et="<?php echo $et; ?>"
              data-mark="<?php echo $mark; ?>"
              data-negmark="<?php echo $neg_mark; ?>" 
              
              title="Edit"><button class="btn btn-primary">Edit</button></i>
            </a>
            <?php
            }
              ?>
                                         
                      
                                     <div id="editModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="update_form" action="edit_qns.php" method="post">
          <div class="modal-header">            
            <h4 class="modal-title">Edit User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <br>
            
            
                 Assessment.no   
                  :   
                   <input type="text" name="id" id='id'>  <br>
             
                 Title   
                  :   
                  <input type="text" name="name" id='name' disabled>  <br>
              
                 Schedule date   
                  :   
                 <input type="date" name="startDate" id='startDate' min="<?php echo $today;?>" required>  <br>
             
                 Schedule time   
                  :   
                  <input type="time" name="st" id='st' required>  <br>
              
                 Freeze date   
                  :   
                   <input type="date" name="endDate" id='endDate' min="<?php echo $today; ?>" required>  <br>
                
                     <h5 id="rresult" ></h5> <br> 
              
                 Freeze time   
                  :   
                  <input type="time" name="et"  id='et' required> <br> 
                
                       <h5 id="rresult3"></h5> 
              
                 No.of.Questions   
                  :   
                  <input type="number" name="nn" id='nn' required><br>  
                
                     <h5 id="rresult2"></h5> <br>
                       
              
                 Marks   
                  :   
                  <input type="number" name="marks" id='marks' required>  <br>
              
                 Neg.Marks   
                  :   
                  <input type="number" name="neg_marks" id='neg_marks' required>  
                <br>
                     <h5 id="rresult1" ></h5>
             <br>
                 Total time(mins)  : <input type="number" name="tot_time" id="tot_time" required><br>
              <h5 id="rresult5"></h5> <br>
       <button type="submit" id='id' name='update' class="enableOnInput" style="width: 50%" onclick="updateass()">Update</button>
      
       </div>
        </form>
      </div>
    </div>
  </div>
                             <?php
                             if($n2==1 || $stss=="Superadmin")
                      {
                             echo'            
                      
                    </td>
                    <td>
                        <button   class="btn btn-danger" value='.$aa.' name="but11" style="vertical-align:middle" onclick="remove('.$aa.')"><span>Remove</span></button> </td>
                                         
                   
                    </td><td></td>';
                  }
                    echo "</tr>";
                  
                }
                  else if(($r['s_date']==$today and $ttt >= $r['s_time']) or ( $ttt <=$r['e_time'] and $r['e_date']==$today))
                          {
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                          $etime=$r['e_time'];
                        echo '
          
                    <td>
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$k++.'</span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">'
                      .$name.'
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status">'.$no_qn.'</span>
                      </span>
                    </td>
                    <td>
                      <span class="status">'.$duration.'</span>
                    </td>
                    <td>
                      <span class="status">Scheduled on<br> '.$sts.'</span>
                    </td>
                    <td>
                     ';
                    if($_SESSION['stss']=='Superadmin')
                  {echo'
                      <span class="status"> '.$created_by.'</span>
                      ';
                    }
                    echo'
                    </td>
                     <td>
                      <div>
                      <span class="status">On Going</span>
                                         
                      </div>
                    </td>';
                    echo "</tr>";
                  }
                  else if( $today>$r['s_date'] and $today<$r['e_date'])
                  {
                    
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                          $etime=$r['e_time'];
                        echo '
          
                    <td>
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$k++.'</span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">'
                      .$name.'
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        
                        <span class="status">'.$no_qn.'</span>
                      </span>
                    </td>
                    <td>
                      <span class="status">'.$duration.'</span>
                    </td>
                    <td>
                      <span class="status">Scheduled on<br> '.$sts.'</span>
                    </td>
                    <td>
                      ';
                    if($_SESSION['stss']=='Superadmin')
                  {echo'
                      <span class="status"> '.$created_by.'</span>
                      ';
                    }
                    echo'
                    </td>
                    
                    
                     <td>
                      <div>
                      <span class="status">On Going</span>
                                         
                      </div>
                    </td><td></td>';
                    echo "</tr>";
                  
                  }
                 }
                  ?> 
                </tbody>
              </table>
              <?php
              if($q=='')
    {
      ?>
              <nav aria-label="Page navigation example" id='nnav'>
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
      <a class="page-link" href="sche_ass.php?page=<?php echo $page-1; ?>" tabindex="-1">
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
           ><a class="page-link" href="sche_ass.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
      <a class="page-link" href="sche_ass.php?page=<?php echo $page+1; ?>">
        <i class="fa fa-angle-right"></i>
        
      </a>
    </li>
  </ul>
</nav>
<?php
}
?>
<script>
  
$('#et').keyup(function(){
     console.log(13);
    etchk1();
    ff1();
            
        });
function etchk1()
{
  var st = $("#st").val();
  var et = $("#et").val();
  var startDate = $("#startDate").val();
  var endDate = $("#endDate").val();
   console.log(endDate);
   if (Date.parse(startDate) > Date.parse(endDate)) {
               $('#rresult').show();
                  $("#rresult").html(" * Start date should not be greater than end date");
                  $('#rresult').focus();
              $('#rresult').css("color","red");
                 
                                vvalid2=false;
           }
          else
          {
            $('#rresult').hide();
             
            vvalid2=true;
          }
        
         if (Date.parse(startDate) == Date.parse(endDate))
          {
             if(st>=et)
             {
              $('#rresult3').show();
              $('#rresult3').html(" * End time should not be greater than start time");
              $('#rresult3').focus();
              $('#rresult3').css("color","red");
            vvalid2=false;
            console.log(st);
          }

          
          else
          {
            $('#rresult').hide();
            
            vvalid2=true;
          }
        }
        else
          {
             $('#rresult3').hide();
            vvalid2=true;
          }
          return vvalid2;
}

$('#tot_time').keyup(function(){
          console.log(11);
    t_tchk1();
    ff1();
            
        });
        function t_tchk1()
{
  var stt = $("#tot_time").val();
  console.log(stt);
  if(stt <= 0)
  {
     $('#rresult5').show();
                  $("#rresult5").html(" * Time should be greater than 0 mins");
                  $('#rresult5').focus();
                 $('#rresult5').css("color","red");
                 
                                vvalid5=false;
  }
  else
  {
    $('#rresult5').hide();
            vvalid5=true;
  }
  return vvalid5;
}
$('#neg_marks').keyup(function(){
     console.log(14);
    n_mchk1();
    ff1();
            
        });
function n_mchk1()
{
  var m = $("#marks").val();
  var nm = $("#neg_marks").val();
   if (m < nm) {
            $('#rresult1').show();
                $("#rresult1").html(" * negative marks should not be greater than mark");
                $('#rresult1').focus();
              $('#rresult1').css("color","red");
                vvalid3=false;
           }
           else
          {
            $('#rresult1').hide();
            vvalid3=true;
          }
       return vvalid3;
}
$('#nn').keyup(function(){
     console.log(15);
    n_nchk1();
    ff1();
            
        });
function n_nchk1()
{
   var n = $("#nn").val();
   if(n<=0)
       {
        $('#rresult2').show();
        $("#rresult2").html(" * Enter valid no of questions");
        $('#rresult2').focus();
        $('#rresult2').css("color","red");
        vvalid4=false;
       }
       else
          {
            $('#rresult2').hide();
            vvalid4=true;
          }
          return vvalid4;
}
function ff1()
{
  if( vvalid2 && vvalid3 && vvalid4 &&vvalid5)
  {
    $('.enableOnInput').prop('disabled', false); 
  }
  else
  {
    $('.enableOnInput').prop('disabled', true); 
  }
}

</script>

