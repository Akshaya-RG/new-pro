  <?php
     session_start();


$k=$_SESSION['k'];


include 'db.php';




$un=$_SESSION['uname'];
$t_ins=$_SESSION['t_ins'];
$dept=$_SESSION['dept'];
$class=$_SESSION['yr'];
$ins=$_SESSION['ins'];
      $q = $_GET['q'];
?>	  
		  
		  
		  
		        
      <div class="table-responsive">
              <form  method="post">
              <table class="table align-items-center table-flush" id="tab">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">S.no</th>
                    <th scope="col" class="sort" data-sort="budget">Title</th>
                    <th scope="col" class="sort" data-sort="status">Total Questions</th>
                    <th scope="col" class="sort" data-sort="status">Total Duration(in min)</th>
                    <th scope="col"  class="sort" data-sort="status">status</th>
                    <th></th>
                    <th scope="col" class="sort" data-sort="completion">Answer Key</th>
                    <th></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <?php

                     
                    date_default_timezone_set('Asia/Kolkata');
                    $today = date("Y-m-d"); 
                    $ttt=date('H:i:s');

                    

                    //$i=1;
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
                     if($q!='')
                     {
                      $l="SELECT * FROM post_ans inner join result  on ((result.ass_no = post_ans.ass_no and un like '$un' )or e_date <'$today') and post_ans.ass_no LIKE  '$q%' or ass_name  LIKE  '$q%' or s_date  LIKE  '$q%'  or t_ins  LIKE  '$q%' or status LIKE  '$q%'  and is_deleted like 'not deleted'  ";
                        

                     }
                     else
                     {

                       

                      
                      $l1="SELECT * FROM post_ans inner join result  on (result.ass_no = post_ans.ass_no and un like '$un' )or e_date <'$today' and  is_deleted like 'not deleted' ";
                     $y=mysqli_query($db,$l1);

                     $count=mysqli_num_rows($y);
                      $per_page=5;
                     $no_of_page=ceil($count/$per_page);
                    
                     $start=($page-1)*$per_page;

                     $l="SELECT * FROM post_ans inner join result  on (result.ass_no = post_ans.ass_no and un like '$un' ) or e_date <'$today' and  is_deleted like 'not deleted'    limit $start,$per_page";
                      }
                       
                     $y=mysqli_query($db,$l);
                           echo "dmvlv";
                      $tg=mysqli_num_rows($y);
                      echo "<tr>";
                      echo $tg;
                      echo "</tr>";
                     while( $r = mysqli_fetch_assoc($y))
                       { 
                        $aa=$r['ass_no'];
                        echo "<script>console.log(".$aa.");  </script>";
                        $marks=$r['marks_scored'];

                        $abc="select * from post_ans where ass_no='$aa' ";
                       
                           
                       $rr=mysqli_query($db,$abc);
                    
                    
                          while( $r1 = mysqli_fetch_assoc($rr))
                          {
                          $name=$r1['ass_name'];
                          $no_qn=$r1['no_of_qn'];
                          $duration=$r1['tot_time'];
                          $sts=$r1['s_date'];
                          $stt=$r1['s_time'];
                          $timestamp = strtotime($sts);
                          $sts = date("d-m-Y", $timestamp);
                          $status=$r1['status'];
                          $tot_m=$no_qn * $r1['mark'];
                         
                        
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
                    <td>';
                    ?>

                        
              
               
                    
               <a href="#editModal" class="edit" data-toggle="modal">
              <i class="material-icons update" data-toggle="tooltip" 
             
              data-sts="<?php echo $sts; ?>"
              data-stt="<?php echo $stt; ?>"
             data-mark="<?php echo $marks; ?>"
             data-tot="<?php echo $tot_m; ?>"
             

         
              
              title="Edit"><button class="button button1"   style="vertical-align:middle">view</button></i>
            </a>
          </td>
          <?php
          echo "<td></td>"
          ?>

                  
                                         
                   
              
                      
                                         
                      
      <div id="editModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="update_form" action="edit_qns.php" method="post">
          <div class="modal-header">            
            <h4 class="modal-title">view details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
       
 <br>
                <label type="text" style="text-indent:50px;">DATE OF EXAM</label>&nbsp; :&nbsp;    <input type="date" name="dateexam" id="dateexam" style="text-indent:left" readonly ><br> 
                <label type="text" style="text-indent:-3em" >TIME OF EXAM</label>  : &nbsp; <input type="time" name="timeexam" id="timeexam" readonly><br>    
                 <label type="text" style="text-indent:63px"> MARKS SCORED</label> : &nbsp;<input type="number" name="marks" id="marks"  readonly>  <br> 
                 <label type="text" style="text-indent:63px"> TOTAL MARKS</label>  : &nbsp; <input type="number" name="tot" id="tot" readonly>  <br>
              <br>
                    
                     
                     
                 
        </form>
      </div>
    </div>
  </div>


    
                    
                     <td>
                     
                     <?php
                      $files= scandir("answerkeys"); 
                     if($status=='not uploaded')
                     {
                      echo 'to be uploaded';
                        
                     }
                     else
                     {
                      echo '<button ><a style="color:white" download="'.$status.'" href="answerkeys/'.$status.'">Answer Key</a></button>'; 

                      echo '         
                    </td><td></td>';
                    echo "</tr>";
                  }

                 }

                  }                
                    
             
            
              
             
                 
                  
                  ?>
                    
                  </td></td>
                 

                </tbody>
              </table>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script>
                $(document).on('click','.update',function(e) {
      
   var sts = $(this).attr("data-sts");
   var stt= $(this).attr("data-stt");
   var mark =$(this).attr("data-mark");
  var tot =$(this).attr("data-tot");
  console.log(sts);
  console.log(stt);
  console.log(mark);
  console.log(tot);

   
     $('#dateexam').val(sts);
     $('#timeexam').val(stt);
     $('#marks').val(mark);
      $('#tot').val(tot);

     
    
  });

              </script>
               <nav aria-label="Page navigation example" id="nnav">
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
      <a class="page-link" href="comp_ass2.php?page=<?php echo $page-1; ?>" tabindex="-1">
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
           ><a class="page-link" href="comp_ass2.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
      <a class="page-link" href="comp_ass2.php?page=<?php echo $page+1; ?>">
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