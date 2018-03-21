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
    <title>placeme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	

  </head>
  <body>
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
							   <img src="images/logo.png" width="205" height="45">
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								        <li role="presentation"><a href="index.php" >Home</a></li>
                <li role="presentation"><a href="login.php" >Login</a></li>
                <li role="presentation"><a href="find_job.php">Find Job</a></li>                
                <li role="presentation"><a href="give_job.php">Add Job</a></li>
                <li role="presentation"><a href="about.html">About Us</a></li>
                <li role="presentation"><a href="contact.php" class="active">Feedback</a></li>
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
				<li>Feedback</li>	

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
	<section >
	 <br>
        <div class="container">
             <div id="contact-page" class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
  
            <div class="center"> 

                
                <h2>Drop Your Message</h2>
                <p>If you face any problem you can ask them.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                 
                    <form  method="post" role="form" class="contactForm">
                            <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                     minlength="4" maxlength="20" required="required"/>
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required"  />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" minlength="2" maxlength="20" required="required"/>
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" minlength="20" maxlength="100" placeholder="Message" required="required"></textarea>
                                    <div class="validation"></div>
                            </div>
                        <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button></div>
                    </form>                       
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
        </div>

    </section><!--/#contact-page-->

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

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['subject'];
$password=$_POST['message'];


$sql = "INSERT INTO feedback (name, email, subject, message)
VALUES ('$name', '$email', '$phone', '$password')";

if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";

	 echo "<script>alert('Your message has been sent');</script>";

 echo "<script>location.href='index.html';</script>";



} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();





}



?>








	
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
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>