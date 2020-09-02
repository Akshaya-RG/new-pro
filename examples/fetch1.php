<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
/*if($_SESSION['uname']=='')
 {

         echo '<script>alert("Please sign up");</script>';
        echo '<script>window.location= "frontpage.php"</script>';
 
        }*/

$k=$_SESSION['k'];


include 'db.php';


$un=$_SESSION['uname'];
$t_ins=$_SESSION['t_ins'];
$dept=$_SESSION['dept'];
$class=$_SESSION['yr'];
$ins=$_SESSION['ins'];
$q=$_GET['q'];
  $page=$_SESSION['pg'];





$query="select * from user where un like '$un'";
  $y=mysqli_query($db,$query);
while( $r = mysqli_fetch_assoc($y))
 {
  $n=$r['un'];
  $m=$r['fn']." ".$r['ln'];
  $s=$r['pic'];
  $gen=$r['gender'];
}

?>



<div class="table-responsive">
              <table class="table align-items-center table-flush" id = "tab">
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
                      //$query="select * from post_ans "
                     //$query="select * from post_ans  where s_date<='$today'and e_date>='$today' and is_deleted='not deleted' ";
                     $dd="select * from post_ans  where   is_deleted like 'not deleted' and  s_date<='$today'and e_date>='$today'";
                      $yy=mysqli_query($db,$dd);
                       $count1=mysqli_num_rows($yy);
                     $l="SELECT * FROM post_ans inner join result  where result.ass_no  like post_ans.ass_no and un   like '$un'   and is_deleted like 'not deleted' and  s_date<='$today'and e_date>='$today'";
                        
                     $y=mysqli_query($db,$l);
                       $count2=mysqli_num_rows($y);
                      $count=$count1-$count2;
                     $per_page=5;
                     $no_of_page=ceil($count/$per_page);

                     $start=($page-1)*$per_page;
                      $l="select * from post_ans  where   is_deleted like 'not deleted' and  s_date<='$today'and e_date>='$today' limit $start,$per_page";
                      // $ss=mysqli_num_rows(mysqli_query($db,$l));
                         
                     $y=mysqli_query($db,$l);




                     while( $r = mysqli_fetch_assoc($y))
                       {  
                        $aa=$r['ass_no'];
                        $t=$r['t_ins'];
                       
                        if($t==$t_ins || $t=="general")
                        {   
                          if($t=='school' )
                          {
                        $a1="select * from post_ans where  ass_no='$aa'  and ins='$ins' and class='$class' and gp='$dept'";
                      }
                      elseif($t=='clg')
                      {
                         $a1="select * from post_ans where ass_no='$aa'  and ins='$ins' and yr='$class' and dept='$dept'";
                      }
                      else
                      { 
                        $a1="select * from post_ans where  ass_no='$aa'";

                      }
                        if(mysqli_query($db,$a1))
                           {
                        
                        $a="select ass_no, un from result where un='$un' and ass_no='$aa' ";
                         if(mysqli_num_rows(mysqli_query($db,$a))==0)
                         { 
                          if($r['s_date']==$today and $ttt < $r['s_time'])
                          {
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                        $timestamp = strtotime($sts);
                        $sts = date("d/m/Y", $timestamp);
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
                    <td></td>
                     <td>
                     <label class="button button1"  name="but" style="vertical-align:middle"><span> Test will start soon</span></label> </td>
                    
                                         
                      </div>
                    </td>';
                    echo "</tr>";
                  }
                 else if($r['s_date']>$today )
                          {
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                          $timestamp = strtotime($sts);
                          $sts = date("d/m/Y", $timestamp);
                        
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
                      <span class="status">Scheduled on <br> '.$sts.'</span>
                    </td>
                    <td></td>
                     <td>
                        <label class="button button1" name="but" style="vertical-align:middle"><span> Test will start soon</span></label> </td>
                                         
                      </div>
                    </td>';
                    echo "</tr>";
          
                          }

                      else if(($r['s_date']==$today and $ttt >= $r['s_time']) or( $r['e_date']==$today and $ttt <=$r['e_time'] ))
                          {
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                          $etime=$r['e_time'];
                           $timestamp = strtotime($sts);
                        $sts = date("d/m/Y", $timestamp);
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
                    <td></td>
                    
                     <td>
                      <div>
                     <button  class="button button1" value='.$aa.' name="but" style="vertical-align:middle"><span>start test</span></button> 
                                         
                      </div>
                      </td>';
                    echo "</tr>";
                  }

                  else if( $today>$r['s_date'] and $today<=$r['e_date'])
                  {
                    
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                          $etime=$r['e_time']; $timestamp = strtotime($sts);
                        $sts = date("d/m/Y", $timestamp);
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
                    <td></td>
                    
                  
                      <td>
                      <div>
                     <button  class="button button1" value='.$aa.' name="but" style="vertical-align:middle"><span>start test</span></button> 
                     </td>
                                         
                      </div>
                    ';
                    echo "</tr>";
                  
                  }


                       }
                       }
                      }
                    }
                      
                      
                    
                    
                  ?>



                      </form> 
                     </tr>
                   </tbody>
                 </table>

                  