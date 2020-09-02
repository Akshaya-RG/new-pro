  <?php
     session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);
$k=$_SESSION['k'];


include 'db.php';




$un=$_SESSION['uname'];
$t_ins=$_SESSION['t_ins'];
$dept=$_SESSION['dept'];
$class=$_SESSION['yr'];
$ins=$_SESSION['ins'];
$q = $_GET['q'];
$page=$_SESSION['pg'];

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
                    
                    <th></th>
                    
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
                     



                      
                      $l="SELECT * FROM  result where un like '$un'  and is_deleted like 'not deleted'  ";
                     $y=mysqli_query($db,$l);

                     $count=mysqli_num_rows($y);
                      $per_page=5;
                     $no_of_page=ceil($count/$per_page);
                  
                    
                     $start=($page-1)*$per_page;

                     $l="SELECT * FROM  result where un like '$un'  and is_deleted like 'not deleted'    limit $start,$per_page";
                      

                     $y=mysqli_query($db,$l);


                     while( $r = mysqli_fetch_assoc($y))
                       { 
                        $aa=$r['ass_no'];
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
                    

                        
              }
            }

               
                    
               

    ?>
                  

                </tbody>
              </table>
              </form>
          </div>
      </div>
  </div>
</tr>
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
