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
              <a href="index.html"><img src="images/logo.png" width="205" height="45"></a>
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
                <li role="presentation"><a href="contact.php">Feedback</a></li>
                <li role="presentation"><a href="jobs.php">jobs available</a></li>   
          
              </ul>
            </div>
          </div>            
        </div>
            </div>  
        </nav>      
    </header>
     
    <section id="main-slider" class="no-margin">


    
    <form method="post">

 

        <div class="carousel slide"> 


            <div class="carousel-inner"><div id="contact-page" class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

                <div class="item active" style="background-image: url(images/partners/partner_bg.png)">


  

                    <div class="container">

                    <br><br><br><br><br><br><br><br>
                     
                           
                           
                <h2 align="center">Choose Your Carier</h2>
                <p align="center">"Opportunities don't happen, you create them." </p>
                <br>
                <br>
                
                
             <div align="center">

             
                                    
                       <button type="submit" name="find_job" class="btn btn-primary btn-lg" required="required">Find a job</button> 
                       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                                              
                        <button type="submit" name="give_job" class="btn btn-primary btn-lg" required="required">Give a job</button>       

                        </div>    

                       
                    </div>


                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        </div>
        </form>
    </section><!--/#main-slider-->
    
  <?php



if(isset($_POST['find_job']))
{
   // header("Location:register.php");
    //header('location: /register.php');
   // header("Location: http://www.yourwebsite.com");
   
    echo "<script>location.href = 'find_job.php';</script>";
    //exit;
   // <script type="text/javascript">location.href = 'register.php';</script>
}


if(isset($_POST['give_job']))
{
   // header("Location:register.php");
    //header('location: /register.php');
   // header("Location: http://www.yourwebsite.com");
   
    echo "<script>location.href = 'give_job.php';</script>";
    //exit;
   // <script type="text/javascript">location.href = 'register.php';</script>
}


    
   
    ?>





    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
    <script src="js/wow.min.js"></script>
    <script src="js/functions.js"></script>
    
</body>
</html>




















   