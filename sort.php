
 <?php
 session_start();

//$a=$_SESSION['login'];

if(isset($_SESSION['login']))

{

              
              //$qualification=$_SESSION['qualification'];
             // $production=$_SESSION['production'];
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
      <link href="event_analysis/css/bootstrap.min.css" rel="stylesheet">
  <link href="event_analysis/css/style.css" rel="stylesheet">
  <link href="event_analysis/css/themify-icons.css" rel="stylesheet">

  
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
                <li role="presentation"><a href="give_job.php">Add Job</a></li>
                <li role="presentation"><a href="about.html">About Us</a></li>
                <li role="presentation"><a href="contact.php">Feedback</a></li>
                <li role="presentation"><a href="jobs.php" class="active">jobs available</a></li>   
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
        <li>Jobs Available</li>   

         <?php


echo "&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";  


         $b=$_SESSION['username'];
         echo"".$b."";




         ?>     
      </div>    
    </div>  
  </div>
  
  
  <section >
 
<br>
             

        <div class="container" >
            <div id="contact-page" class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
   
         


                    <form action="" method="post" role="form" class="contactForm"  >
                           
                  

        
         <div class="row me-row content-ct speaker" id="event">
         <h2 class="row-title">Jobs Avilable </h2>
        
        <?php 
               
                $con = mysqli_connect("localhost","root","","placeme");

                // Check connection
                if (mysqli_connect_errno($con))
                {
                    echo "Failed to connect to DataBase: " . mysqli_connect_error();
                }


                $location=$_GET['location'];
                $production=$_GET['production'];
                $qualification=$_GET['qualification'];
                 

          
              $result = mysqli_query($con, "SELECT * FROM  create_job WHERE state = '".$location."' and qualification = '".$qualification."' ;");
              $num_rows = @mysqli_num_rows($result);
               if($num_rows>0)
              {
              while($row = mysqli_fetch_array($result))
              {   // <img src="img/tech.png" class="speaker-img">    


             

                echo'
                  
                  <div class="col-md-4 col-sm-6 feature">
                  
                   
                    <p class="serif">';

                    $a=$row['logo'];

                     //echo '<img src='. $row['logo'] .'class="speaker-img">';
                      echo "<img src='",$a,"' class='speaker-img'/>";



                      echo "<h3>". $row['name'] ."</h3>";
                      echo "<h4>Description :</h4><h5> ".$row['description']."</h5>";
                      echo "<h4>State :</h4><h5> ".$row['state']."</h5>";
                      echo "<h4>Location :</h4><h5> ".$row['loc']."</h5>";
                      echo "<h4>Production :</h4><h5> ".$row['production']."</h5>";
                      echo "<h4>Needed :</h4><h5> ".$row['employes']." people";
                      echo "<h4>Salary : </h4><h5>".$row['salary'];
                      echo "<h4>Qualification Required :</h4><h5> ".$row['qualification']."</h5>";
                      echo "<h4>Qualification :</h4><h5> ".$row['qualification']."</h5>";
                      echo "<h4>Skills Required :</h4><h5> ".$row['description']."</h5>";
                      echo "<h4>Contact :</h4><h5> ".$row['ph_no']."</h5>";


               echo'</p></div> ' ;
                
              
              
              }
            }
              else
              {
                echo "No data";
             }

                        
        ?>
        </div> 

      
      <!-- End: Graph -->
      </div>




                    </form> 



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



   <script src="js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/scrolling-nav.js"></script>
      <script src="js/validator.js"></script>
      <!-- Google Analytics -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');
      </script>
  
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

 <script src="jquery-1.12-0.min.js"></script>
    <script src="canvasjs.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $.getJSON("config.php", function (result) {

                var chart = new CanvasJS.Chart("chartContainer", {
                    data: [
                        {
                            dataPoints: result
                        }
                    ]
                });

                chart.render();
            });
        });

        
       
    </script>

  <!-- Bootstrap -->

  
  <style type="text/css">
  .filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
.jumbotron { 
    background-color: #008975; /* Orange */
    color: #ffffff;
}
/*p.serif {
    font-family:  'Hoefler Text', Georgia, 'Times New Roman', serif;
 font-weight: normal;
        font-size: 5em;
 letter-spacing: .1em;
 line-height: 0.9em;
 margin:5px;
 text-align: center;
 text-transform: uppercase;
}


</style>


