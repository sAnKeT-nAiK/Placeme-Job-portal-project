
 <?php


if(isset($_POST['login']))
{


 session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["login"]);
   session_destroy();
   
  // echo "<script>alert('session cleared');</script>";
//header('Refresh: 2; URL = index.html');

 echo "<script>location.href = 'index.php';</script>";
}

?>