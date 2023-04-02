<?php session_start();
if ($_SESSION['testcomplete'] == 'yes') {
    header("Location:cheater.php");
}?>
<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass ='';
  $dbname ='dblab8';

  $mysqli = new mysqli($dbhost, $dbuser, $dbpass , $dbname);
  
  if($mysqli->connect_errno){
      printf("connection failed", $mysqli->connect_error);
      exit();
  }

  $id = $_SESSION['id'];
  $sql1 = "delete from users where id = '$id'";
  $mysqli->query($sql1);
  header(("Location: deletelogout.php"));
?>

