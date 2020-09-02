<?php

session_start();
$a=$_SESSION['uname'];
echo $a;
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
body{
	font-family: 'IBM Plex Sans', sans-serif;
	background-image: url(bg.jpg);
	background-size: 100% 100%;
	color: #fff;
}


.tab:not(:checked) + label{
	opacity: 0.8;
}
.login-form{
	position: absolute;
	top: 30%;
	left: 7%;
	right: 10%;
	width: 400px;
}
.tab{
	display: none;
}
.tab-header{
	width: 20%;
	text-align: center;
	display: inline-block;
	font-size: 18px;
	cursor: pointer;
	
}
.tab-header:after{
	display: block;
	content: '';
	height: 20px;
	border-bottom: 2px solid rgb(173,56,120);
	transform: scaleX(0);
	transition: transform 250ms ease-in-out;
}
.tab:checked + label:after{
	transform: scaleX(1);
}
.header{
	margin: 10px 0 10px 0;
	font-size: 20px;
	text-align: center;
	color: rgba(255,255,255,0.8);
}
.form-input input{
	border-radius: 10px;
	height: 35px;
	margin: 10px 450px;
	width: 40%;
	border-width: 0;
	background-color: rgba(255,255,255,0.2);
	padding: 10px;
	color: #fff;
}
input::placeholder, #check{
	color: rgba(255,255,255,0.8);
}
input:focus{
	outline: none;
}
.submit-button{
	margin: 20px 450px;
	width: 40%;
	height: 35px;
	border-radius: 10px;
	border-width: 0;
	text-align: center;
	background-color: rgb(173,56,120);
	color: #fff;
}
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
  opacity: 0.6;
  color: white;
}
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
  opacity: 0.6;
}

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
  <!-- Sidenav -->
  
 
  <!-- Main content -->
   <div class="container" id="panel">
    <!-- Topnav -->

    <!-- Header -->
    <!-- Header -->


        <form  >
            
            <div class="card-body">
             
                <h6 class="heading-small text-muted mb-4">Personal Details</h6>
                <div class="pl-lg-4">
                  <div class="row">

           
                    
                    <div class="col-lg-6">
                      
                        
                        <input type="text" id="fn" class="form-control"    name="fn"  placeholder="FIRST NAME" >
						             <span id="fncheck" class="text-danger font-weight-bold"> </span>               
                                         
					  
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        
                        <input type="text" id="ln" class="form-control"    name="ln"  placeholder="LAST NAME"  >
						         <span id="lncheck" class="text-danger font-weight-bold"> </span>
                      </div>
                    </div>
                      
                    
              
                  
                    
                    <div class="col-lg-6">
                      
                        
                        <input type="date" id="dob" class="form-control"  name="dob"  max="2005-12-31" required >
                      
                    </div>


                     <div class="col-lg-6">
                      <div class="form-group">
                        
                        <input type="number" id="phno" class="form-control"   name="phno" placeholder="PHONE NO" >
                          <span id="pncheck" class="text-danger font-weight-bold"> </span>
                         
                      </div>
                    </div>
                      
                    



                    <div class="col-lg-6">
                      <div class="form-group">

                        <div class="select-option">
                              
                           
            <select id="gen"  class="form-control"   name="gen" id="gen" >
            <option value="select" selected hidden>gender..</option>
            <option value="male">male</option>
            <option value="female">female</option>
              <option value="others">others</option>
          </select>
             <span id="result" class="text-danger font-weight-bold"> </span>
      
     </div>
   </div>
 </div>


                     

                     


                     <div class="col-lg-6">
                      <div class="form-group">

                        <div class="select-option">
                              
                           
            <select id="tins"  class="form-control" name="tins">
            <option value="select" selected hidden>Select Type of institute</option>
            <option value="school">school</option>
            <option value="clg">college</option>
       
        </select>
  <span id="dis" class="text-danger font-weight-bold"> </span>
      
     </div>
   </div>
 </div>


        <div id="school" class="inv">
              
        <hr class="my-4" />

          <h6 class="heading-small text-muted mb-4">Academic Details</h6>
                <div class="pl-lg-4">
                  <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group">
                        
                      <select id="ins"  class="form-control"   name="ins1" >
            <option value="select"  selected hidden>Select Institution name</option>
            <option value="tvs">tvs</option>
            <option value="vikaasa">vikaasa</option>
           <option value="mahatma">mahatma</option>

       
        </select>

                      </div>
                    </div>
                  
               

                  
                    <div class="col-lg-6">
                      <div class="form-group">
                        
                        <input id="rno" class="form-control" type="text" name="rno" placeholder="ROLL NO" >
                      </div>
                    </div>
                 
               

                  <div class="col-lg-6">
                      <div class="form-group">
                        
                         <select name="clas"  class="form-control" id="clas">
                                    
                                     <option value="select" selected hidden>class</option>
                                    <option value="11" >XI</option>
                                     <option value="12" >XII</option>
                                 



                                </select>
                
                      </div>
                    </div>


                
                    <div class="col-lg-6">
                      <div class="form-group">
                        

                        <select id="gp"  name="gp"  class="form-control" >
                                     <option value="select" selected hidden>group</option>
									                    <option value="cse">cse</option>
                                    <option value="bio" >bio</option>
                                    <option value="commerce" >commerce</option>
                                     
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
                        

            <select id="ins1"  class="form-control"   name="ins" >
            <option value="select" selected hidden>Select Institution name</option>
            <option value="klnce">klnce</option>
            <option value="klnit">klnit</option>
           

       
        </select>

		  


                      </div>
                    </div>
               

                  
               

                  
                    <div class="col-lg-6">
                      <div class="form-group">
                   
                        <input id="rno1" class="form-control" type="text" name="rno" placeholder="ROLL NO" >
                      </div>
                    </div>
                 
               

                  <div class="col-lg-6">
                      <div class="form-group">
                        
                        <select id="clas1"  name="yr"  class="form-control" >
                                    <option value="select" selected hidden>Year</option>                                   
								                     <option value="1">I</option>
                                    <option value="2" >II</option>
                                    <option value="3" >III</option>
                                    <option value="4" >1V</option>

                                     
                                </select>
							
                      </div>
                    </div>


                
                    <div class="col-lg-6">
                      <div class="form-group">
                        
                      <select id="gp1"  name="dept"  class="form-control"  >
                                    <option value="select" selected hidden>Department</option>
									                   <option value="CSE">CSE</option>
                                    <option value="IT" >IT</option>
                                    <option value="EEE" >EEE</option>
                                     <option value="ECE" >ECE</option>
                                     <option value="MECH" >MECH</option>
                                        <option value="CIVIL" >CIVIL</option>
                                </select>
							
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
           


              <script>
            document
                .getElementById('tins')
                .addEventListener('change', function () {
                    'use strict';
                    var vis = document.querySelector('.vis'),   
                     tins = document.getElementById(this.value);
                    if (vis !== null) {
                        vis.className = 'inv';
                    }
                    if (tins !== null ) {
                        tins.className = 'vis';
                    }
            });
        </script>


                
                               </div>
                             </div>
                            
                           
                          </div>
                  
              

                <!-- Address -->

                
               
                <hr class="my-4" />
                <!-- Description -->
               
                
                   
                    <button type="submit" id="submit" class="button button1  enableOnInput"  name="submit" style="vertical-align:middle"  onclick='validation();'  ><span>submit !!!</span></button> 
                  </div>
                    </div>   
					   </form>

                
              
            </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>      
<script>

$(document).ready(function(){
                              var valid1=false;
                              var valid2=false;
                               var valid3=false;
                               var valid4=false;
                                var valid5=false;

});

function validation(){
    
   
    //console.log(lk);
                            
      
                            
                                //console.log(11);
                              var fn = $('#fn').val();
                              var ln = $('#ln').val();
                              var dob= $('#dob').val();
                              var phno= $('#phno').val();
                              var gen =$('#gen').val();
                              var tins=$('#tins').val();
                              if(tins=="school")
                              {
                              var ins= $('#ins').val();
                              var clas = $('#clas').val();
                              var gp = $('#gp').val();
                              var rno=$('#rno').val();
                            }
                            else if(tins=="clg")
                            {
                               var ins= $('#ins1').val();
                              var clas = $('#clas1').val();
                              var gp = $('#gp1').val();
                              var rno=$('#rno1').val();
                            }
                            
                               
                               valid1=firstchk();
                               valid2=lastchk();
                              valid3=phonenochk();
                              valid4=gend();
                              valid5=select();

                              

                            if(valid1 && valid2 && valid3 && valid4 && valid5)
                                 {
                                 $.ajax({
                                  url:"reg.php",
                                  type:"post",
                                  data: { 
                                   fn : fn,
                                   ln : ln,
                                   dob : dob,
                                   phno : phno,
                                    gen:gen,
                                   tins:tins,
                                   ins : ins,
                                   clas : clas,
                                   gp : gp,
                                   rno:rno,
                                  
                                  },
                                   
                                  success:function(da){
                                     var response = JSON.parse(da);    
                                     console.log(response.statusCode); 
                                     if (response.statusCode=='200') {    
                                     alert("Registered User!");   
                                     window.location="dashboard2.php";
                                     }
                                            
                                                                       
                                   
                                  }


                                  });
                               }

                                 //console.log(rno);
                                //console.log(tins);
                                 //console.log(fn);
                                 
                                 

                               }
                            
                           
       

function abc(){

   $('.enableOnInput').prop('disabled', true);
    
     
          console.log(valid5);
             console.log(valid4);
               console.log(valid3);
                console.log(valid2);
                  console.log(valid1);

                          if(valid1 && valid2 && valid3 && valid4 && valid5)
                                 {console.log("1");
                                  $('.enableOnInput').prop('disabled', false); 
                                }
                                


}


       
       
       
        
       




       
        
    
        $('#fn').keyup(function(){

          console.log("aaa");
             firstchk();
             abc();
       });

             
        function firstchk(){

          
          var fn_val = $('#fn').val();
            
            if(fn_val.length == 0){
              $('#fncheck').show();
              $('#fncheck').html("**please fill username");
              $('#fncheck').focus();
              $('#fncheck').css("color","red");
              valid1=false;
              
              
            }
           
                         
                else if((fn_val.length < 3) ||(fn_val.length >30)){
              $('#fncheck').show();
              $('#fncheck').html("**please  select length between 3 and 30");
              $('#fncheck').focus();
              $('#fncheck').css("color","red");
              
              valid1=false;

              
              
            }else{
            $('#fncheck').hide();
            valid1=true;
              }       
             
         return valid1;
        }
                 
       
                 
        
        
        
        $('#ln').keyup(function(){
                 lastchk();
                  abc();
                      });
        

                


           function lastchk(){
          
          var ln_val = $('#ln').val();
            
            if(ln_val== ''){
              $('#lncheck').show();
              $('#lncheck').html("**please fill lastname");
              $('#lncheck').focus();
              $('#lncheck').css("color","red");
              valid2=false;
              
              
              
            }
                         
                   else if((ln_val.length >10)){
              $('#lncheck').show();
              $('#lncheck').html("**please select  length within 10");
              $('#lncheck').focus();
              $('#lncheck').css("color","red");
              valid2=false;
              
              
              
            }else{
            $('#lncheck').hide();
             valid2=true;
             }        
            return valid2;                
          }


         
        $('#phno').keyup(function(){
                 phonenochk();
                  abc();
                      });
        

                


           function phonenochk(){
          
          var inputval = $('#phno').val();
            if(inputval == ''){
             $('#pncheck').show();
                $("#pncheck").html(" * Fill this phone number field");
                  $('#pncheck').focus();
                  $('#pncheck').css("color","red"); 
                  valid3=false;
            }
           else if (inputval.length == 10)
                          {

                          if(isNaN(inputval))
                               {
                                    $('#pncheck').show();
                                    $("#pncheck").html(" * not a phone number");
                  $('#pncheck').focus();
                  $('#pncheck').css("color","red"); 
                  valid3=false;
                                }
              else {
                $('#pncheck').hide();
                   valid3=true;
              }               
                          }
                            //alert('Phone number must be 10 digits.');
                        else if ((inputval.length < 10)||(inputval.length > 10)){
                             $('#pncheck').show();
               $("#pncheck").html(" *not of length 10");
                             $('#pncheck').focus();
                 $('#pncheck').css("color","red"); 
                 valid3=false;
                              }
            else{
              $('#pncheck').hide();
                valid3=true;
            }   
            return valid3;
          }
               
               $('#gen').change(function(){
                console.log("gend");
                   gend();
                    abc();
                      });

              function gend(){
                 valid4=true;
                 return valid4;

               }


               $('#tins').change(function(){
               var t=$('#tins').val();

                              
                             
                             

               console.log(t);
               if(t=="school" ){
                 console.log(t);
    $('#ins').change(function(){
       var ins= $('#ins').val();
         console.log(ins);
    $('#rno').change(function(){

       var rno=$('#rno').val();
         console.log(rno);
   $('#clas').change(function(){
    var clas = $('#clas').val();
       console.log(clas);
  $('#gp').change(function(){ 
    var gp = $('#gp').val();

console.log(gp);
    select();
     abc();
   
          });  
        });
        });
     });
  }
            else if( t=="clg"){
                 console.log(t);
    $('#ins1').change(function(){
       var ins= $('#ins1').val();
         console.log(ins);
    $('#rno1').change(function(){

       var rno=$('#rno1').val();
         console.log(rno);
   $('#clas1').change(function(){
    var clas = $('#clas1').val();
       console.log(clas);
  $('#gp1').change(function(){ 
    var gp = $('#gp1').val();

console.log(gp);
    select();
     abc();
   
          });  
        });
        });
     });
  }
});



               

                   
              function  select()
               {
                valid5=true;
                 return valid5;

                   

               }







                     
            
    
                                          
                            
                                                                 
                   



              
              


      
    </script>



     
        
      
      


  
      
	  
	  
	  
	  
	  
	  
	  
	  <!-- Footer -->
      
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>