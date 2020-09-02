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
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">sno</th>
                    <th scope="col" class="sort" data-sort="budget">title</th>
                    <th scope="col" class="sort" data-sort="status">total questions</th>
                    <th scope="col" class="sort" data-sort="status">total duration(in min)</th>
                    <th scope="col">status</th>
					<th></th>
					<th scope="col" class="sort" data-sort="completion">Option</th>
                    <th></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                      <form action="resultview.php"  method="post">
                    <?php
                    /*$cnt = mysqli_num_rows(mysqli_query($db,"SELECT * FROM post_ans"));
                    $row= $cnt+1;
                    $_SESSION['ass_no']=$row;*/
                    date_default_timezone_set('Asia/Kolkata');
                    $today = date("Y-m-d"); 
                    $ttt= date('H:i:s');
               
                    
                   
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
                       $sql="SELECT * FROM post_ans WHERE ass_no LIKE  '$q%' or ass_name  LIKE  '$q%' or s_date  LIKE  '$q%'  or t_ins  LIKE  '$q%' or status LIKE  '$q%' and e_date <='$today' and e_time<='$ttt' and is_deleted like 'not deleted' ";
                        
					                }
                     $y=mysqli_query($db,$sql);
                       $count=mysqli_num_rows($y);
                     $per_page=5;
                     $no_of_page=ceil($count/$per_page);
                     $start=($page-1)*$per_page;
					         if($q!='')
                     {
                       $sql="SELECT * FROM post_ans WHERE ass_no LIKE  '$q%' or ass_name  LIKE  '$q%' or s_date  LIKE  '$q%'  or t_ins  LIKE  '$q%' or status LIKE  '$q%' and e_date <='$today' and e_time<='$ttt' and is_deleted like 'not deleted' ";
                        
					            }

                     $y=mysqli_query($db,$sql);
                     



                    
                     
                      
                      
                      
                  
                      
                  ?>



                      </form> 
				             </tr>
                   </tbody>
                 </table>