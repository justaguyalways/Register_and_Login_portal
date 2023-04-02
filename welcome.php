<?php session_start();
if ($_SESSION['testcomplete'] == 'yes') {
    header("Location:cheater.php");
}
?>

<?php
$_SESSION['ct']++;
if($_SESSION['ct'] == 1){
    $_SESSION['email'] = $_POST["uemail"];
    $_SESSION['pwd'] = $_POST["upass"];
}

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass ='';
$dbname ='dblab8';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass , $dbname);

if($mysqli->connect_errno){
    printf("connection failed", $mysqli->connect_error);
    exit();
}

$email = $_SESSION['email'];
$pwd = $_SESSION['pwd'];

$sql1 = "select * from users where email = '$email' and pass = '$pwd'";
$result = $mysqli->query($sql1);
$ct = 0;
if($result){
    while($row = $result->fetch_assoc()){
        $ct++;
        $fname = $row["FirstName"];
        $lname = $row["LastName"];
        $id = $row['id'];
        $_SESSION['id'] = $id;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        // echo $_SESSION['ct'].$ct;
        break;
    }
}

if($ct == 0){
    echo "Invalid credentials, kindly check your email and password";
    exit();
}

?>

<html>
<style>
p.heading {
  margin-top: 150px;
}

p.top {
  margin-top: 20px;
  margin-bottom: 20px;
  font-size: 25px;
}

h1{
    font-size: 38px;
}

label{
    font-size: 16px;
}
input{
    font-size: 16px;
}
a{
    font-size: 23px;
}
</style>
	<body> 
    <center><p class = "heading">
    <h1> <?php
            $fname =  $_SESSION['fname'];
            $lname = $_SESSION['lname'];
            echo "<h1>Welcome $fname $lname </h1> </br>";
        ?> </h1></p><br/>
        
        <a href="userprofile.php">View Profile </a></br>
        <a href="updateprofile.php">Update Profile </a></br>
        <a href="deleteuser.php">Delete Profile </a></br>
        <a href="userlogout.php">Click to logout </a></br>
	</body>
</html>