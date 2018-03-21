 <?php
 session_start();

//$a=$_SESSION['login'];

if(isset($_SESSION['login']))

{




}
 
 else 
 {
 echo "<script>location.href = 'login.php';</script>";
 }
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placeme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />  




   
  </head>
  <body  >
  <header>    
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
  <div class="container">          
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
              <a href="index.html"><img src="images/logo.png" width="205" height="45"></a>
            </div>
          </div>
          
          <div class="navbar-collapse collapse">              
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.php" >Home</a></li>
                <li role="presentation"><a href="login.php" >Login</a></li>
                <li role="presentation"><a href="find_job.php">Find Job</a></li>                
                <li role="presentation"><a href="give_job.php" class="active">Add Job</a></li>
                <li role="presentation"><a href="about.html">About Us</a></li>
                <li role="presentation"><a href="contact.php">Feedback</a></li>
                <li role="presentation"><a href="jobs.php">jobs available</a></li>   
          
              </ul>
            </div>
          </div>            
        </div>
      </div>  
    </nav>    
  </header>

  <div id="breadcrumb">
    <div class="container"> 
      <div class="breadcrumb">              
        <li><a href="index.html">Home</a></li>
        <li>Add Job</li>  

          <?php


echo "&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";  


         $b=$_SESSION['username'];
         echo"".$b."";




         ?>  
      </div>    
    </div>  
  </div>
  
  
<section ><br>
            <br> 
        <div class="container"> <div id="contact-page" class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
  
            <div class="center">  <br>
            <br>      
                <h2>Enter your company details</h2>
                <p>“A giver's purse can never be paused.”</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    
                    <form  method="post" role="form" class="contactForm"  enctype="multipart/form-data">
                            




                            <div class="form-group">

                                    <input type="text" name="comp_name"  class="form-control" id="name" placeholder="Company name" required="required"   minlength="5" maxlength="20"  />
                                    <div class="validation"></div>
                            </div>

                            <div class="form-group" style="color:#878686">

                                    <input type="file" name="image" class="form-control"   />
                                    <div class="validation"></div>
                            </div>
                            

                              
                            <div class="form-group">
                                    <textarea  class="form-control" name="comp_description" required="required" minlength="15" maxlength="400" placeholder="Company discription"></textarea>
                                    <div class="validation"></div>
                            </div>

                                 <div class="form-group" style="color:#878686"> &nbspSelect State :

                                   <select name="state" >
                                      <option value="mumbai" >Mumbai </option>
                                      <option value="pune">Pune</option>
                                      <option value="delhi">Delhi</option>
                                       <option value="M.TECH">Noida</option>
                                   </select>


                            </div>


                            <div class="form-group">
                                    <textarea class="form-control" name="comp_loc" rows="3" required="required"  minlength="15" maxlength="400" placeholder="Location"></textarea>
                                    <div class="validation"></div>
                            </div>






                              <div class="form-group">

                                    <input type="text" name="comp_production" class="form-control" id="name" placeholder="production on the company" required="required" minlength="1" maxlength="25" />
                                    <div class="validation"></div>
                            </div>



                              <div class="form-group">

                                    <input type="number" name="comp_employes" class="form-control" id="name" placeholder="Number of employees needed" required="required" minlength="1" maxlength="10" />
                                    <div class="validation"></div>
                            </div>
                             
                              <div class="form-group">

                                    <input type="number" name="comp_salary" class="form-control" id="name" placeholder="Salary for employees" required="required" minlength="2" maxlength="20"/>
                                    <div class="validation"></div>
                            </div>

                         

                           <div class="form-group" style="color:#878686"> &nbspQualification required :

                                   <select name="comp_qualification" >
                                      <option value="sslc">SSLC</option>
                                      <option value="PUC" >PUC </option>
                                      <option value="BCA">BCA</option>
                                      <option value="MCA">MCA</option>
                                      <option value="M.TECH">M.TECH</option>
                                   </select>





                                      <br><br><br>







&nbspMarks on 10th: <select name="sslc">
  <option value="not_required">not required</option>
    <option value="50">50%</option>
    <option value="60">60%</option>
    <option value="70">70%</option>
    <option value="80">80%</option>
    <option value="90">90%</option>
    

  </select>
 &nbsp   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Marks on PUC:&nbsp <select name="puc">
  <option value="not_required">not required</option>
    <option value="50">50%</option>
    <option value="60">60%</option>
    <option value="70">70%</option>
    <option value="80">80%</option>
    <option value="90">90%</option>
  </select>
  <br><br>

  &nbspMarks on BCA:&nbsp&nbsp&nbsp<select name="bca">
  <option value="not_required">not required</option>
    <option value="50">50%</option>
    <option value="60">60%</option>
    <option value="70">70%</option>
    <option value="80">80%</option>
    <option value="90">90%</option>
  </select>
  

  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMarks on MCA:&nbsp&nbsp&nbsp<select name="mca">
  <option value="not_required">not required</option>
    <option value="50">50%</option>
    <option value="60">60%</option>
    <option value="70">70%</option>
    <option value="80">80%</option>
    <option value="90">90%</option>
  </select>
  <br><br>

  &nbspMarks on M.TECH:&nbsp&nbsp<select name="mtech">
  <option value="not_required">not required</option>
    <option value="50">50%</option>
    <option value="60">60%</option>
    <option value="70">70%</option>
    <option value="80">80%</option>
    <option value="90">90%</option>
  </select>
  <br><br><br>


&nbspskill's required on: <br>
  <input type="checkbox" name="c" value="c">C<br>
  <input type="checkbox" name="c_plus" value="c_plus">C++<br>
  <input type="checkbox" name="java" value="java">JAVA<br>
  <input type="checkbox" name="python" value="python">PYTHON<br>
  <input type="checkbox" name="php" value="php">PHP<br>
  <input type="checkbox" name="perl" value="perl">PERL<br>



  </div>
                              <div class="form-group">
                                    <input type="number" class="form-control" name="comp_ph_no" id="phone" placeholder="Company phone number "  required="required" minlength="8" maxlength="15" />
                                    <div class="validation"></div>
                            </div>
                          
                            
                        <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" required="required" />
                        </div>
          </form> 



             <?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "placeme";

// Create connection







$conn = new mysqli($servername, $username, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if(isset($_POST['submit']))
{


/*
  $image_name=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp,"$image_name");*/


$image_name=$_FILES['image']['name']; 
$image_tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($image_tmp,"$image_name");


$comp_name=$_POST['comp_name'];
//$comp_logo=$_POST['comp_logo'];
$comp_description=$_POST['comp_description'];
$state=$_POST['state'];
$comp_loc=$_POST['comp_loc'];
$comp_production=$_POST['comp_production'];
$comp_employes=$_POST['comp_employes'];
$comp_salary=$_POST['comp_salary'];
$comp_qualification=$_POST['comp_qualification'];
$sslc=$_POST['sslc'];
$puc=$_POST['puc'];
$bca=$_POST['bca'];
$mca=$_POST['mca'];
$mtech=$_POST['mtech'];

if(isset($_POST['c']))
{
$c=$_POST['c'];
}
else
{
$c="";
}
if(isset($_POST['c_plus']))
{
$c_plus=$_POST['c_plus'];
}
else
{
$c_plus="";
}
if(isset($_POST['java']))
{
$java=$_POST['java'];
}
else
{
$java="";
}
if(isset($_POST['python']))
{
$python=$_POST['python'];
}
else
{
$python="";
}
if(isset($_POST['php']))
{
$php=$_POST['php'];
}
else
{
$php="";
}
if(isset($_POST['perl']))
{
$perl=$_POST['perl'];
}
else
{
$perl="";
}

$comp_ph_no=$_POST["comp_ph_no"];




$sql = "INSERT INTO create_job (name, logo, description, state, loc, production, employes, salary, qualification, sslc, puc, bca, mca, mtech, c, c_plus, java, python, php, perl, ph_no)
VALUES ('". $comp_name ."','". $image_name ."','". $comp_description ."','". $state ."','". $comp_loc ."','". $comp_production ."','". $comp_employes ."','". $comp_salary ."','". $comp_qualification ."','". $sslc ."','". $puc ."','". $bca ."','". $mca ."','". $mtech ."','". $c ."','". $c_plus ."','". $java ."','". $python ."','". $php ."','". $perl ."',". $comp_ph_no .");";

                                        
if ($conn->query($sql) === TRUE) {

  echo "<script>alert('Your details are under review. once it is approved your post will be added to database ');</script>";
    echo "<script> location.href = 'index.php';</script>";




} else {
    echo "Error: " . $sql . "<br>" . $conn->error ."<br>";
}
}


$conn->close();
?>





                                         
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


    <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            </ul> 
          </div>
        </div>
        
                    
      </div>
      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
    
    </br>
</body>
</html>