
<?php 
  session_start();

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
                <li role="presentation"><a href="login.php" class="active">Login</a></li>
                <li role="presentation"><a href="find_job.php">Find Job</a></li>                
                <li role="presentation"><a href="give_job.php">Add Job</a></li>
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
				<li>Login</li>
        

            <div align="right">   		</div>
			</div>		
		</div>	
	</div>
	
  
	<section >
 
<br>
            <br>  

        <div class="container" >
            <div id="contact-page" class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
   <div class="center">   

            <br>
            <br>     
                <h2 >Login </h2>
                <p >Just one login to get started.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                    <div id="sendmessage">Successfull!</div>
                    <div id="errormessage"></div>


                    <form action="" method="post" role="form" class="contactForm"  >
                           
                  



                            <div class="form-group">
                                    <input type="email" class="form-control"  name="email" id="email" required="required" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  />
                                    <div class="validation"></div><br>
                            </div>
                            <div class="form-group">
                                    <input type="password" class="form-control" name="password" required="required" id="subject" placeholder="Your Password" minlength="4" maxlength="20" />
                                    <div class="validation"></div>
                             </div>
                       <br> <div class="text-center">
                       <button type="submit" name="submit_login" class="btn btn-primary btn-lg" >Login Now</button> 
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


                        <button type="button" name="submit_register" onclick="window.location.assign('register.php');" class="btn btn-primary btn-lg" >Register Free</button>
  <br><br><br><h5 align="right"><a href="register.html">Forgot Your Password?</h5>
  </div>
                    </form> 

<?php







if(isset($_POST['submit_register']))
{

  // header("Location:register.php");
    //header('location: /register.php');
   // header("Location: http://www.yourwebsite.com");
   
    echo "<script>location.href = 'register.php';</script>";
    //exit;
   // <script type="text/javascript">location.href = 'register.php';</script>
}


$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "placeme";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['submit_login']))
{

    

    
    if(isset($_POST['email']))
{
        $email = $_POST["email"]; 
    }

    if(isset($_POST['password']))
{
        $password = $_POST["password"];
}


$sql = "SELECT * FROM register WHERE email='$email' AND  password='$password' LIMIT 1";


$result = $conn->query($sql);







$res = @mysqli_num_rows($result);

        if($res > 0) {
            //Login Successful



           echo "<script>location.href = 'choose.php';</script>";

             $_SESSION["login"] = "OK";
            $_SESSION["username"] = $email;


        

 



        }else {
            //Login failed
            echo "<script>alert('Invalid email or password');</script>";
            }
        

        }
    
$conn->close();



?>






                    <br> 
                     <br> 
                      <br> 

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