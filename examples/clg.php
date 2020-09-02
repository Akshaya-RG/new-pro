<?php
function clg()
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
                      .$name.'5
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
                        <label class="button button1"  name="but1" style="vertical-align:middle"><span> Test will start soon</span></label> 
                                         
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
                      .$name.'6
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
                        <label class="button button1"  name="but1" style="vertical-align:middle"><span> Test will start soon</span></label> </td>
                                         
                      </div>
                    </td>';
                    echo "</tr>";
          
                          }

                      else if(($r['s_date']==$today and $ttt >= $r['s_time']) and ( $ttt <=$r['e_time'] and $r['e_date']==$today))
                          {
                          $name=$r['ass_name'];
                          $no_qn=$r['no_of_qn'];
                          $duration=$r['tot_time'];
                          $sts=$r['s_date'];
                          $etime=$r['e_time'];
                          $s=$r['s_time'];
                          echo $s."<br>";
                          echo $etime."<br>";
                          echo  $ttt;


                        echo '
          
                    <td>
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$k++.'</span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">'
                      .$name.'7
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
                     <button  class="button button1" value='.$aa.' name="but1" style="vertical-align:middle"><span>start test</span></button> </td>
                                         
                      </div>
                    </td>';
                    echo "</tr>";
                  }

                  else if( $today > $r['s_date'] and $today<$r['e_date'])
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
                      .$name.'8
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
                     <button  class="button button1" value='.$aa.' name="but1" style="vertical-align:middle"><span>    start test</span></button> </td>
                     
                                         
                      </div>
                    </td>';
                    echo "</tr>";
                  
                  }

                     
                       

                       }
                       }
                      }
                      
                      }
                      ?>