<?php
include 'db.php';
 date_default_timezone_set('Asia/Kolkata');
                    $today = date("Y-m-d"); 
//$today='2020-06-27';
$ins="vikaasa";
$class="10";
$dept="bio";
 $query="select * from post_ans where e_date <='$today'  and ins='$ins' and  class='$class' and gp='$dept'";
                     $y=mysqli_query($db,$query);

                     while( $r = mysqli_fetch_assoc($y))


                       {
                             echo "aaa";
                        // $aa=$r['ass_no'];
                       }



                       ?>