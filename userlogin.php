<?php session_start();
$_SESSION['ct'] = 0;
$_SESSION['testcomplete'] = 'no';
if ($_SESSION['testcomplete'] == 'yes') {
    header("Location:cheater.php");
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
	<p class = "heading">
        <center><h1>User Login</h1></p>
        <p class = "top">
		<form action="welcome.php" method="post">
			Email: <input type = "text" name = "uemail" /></br></br>
			Password: <input type = "password" name = "upass" /></br></br>
			<input type="submit" value="Login" />	
	 	</form>
        </br>
        Not a user -
        <a href="newuser.php">Create a new account</a>
	</body>
</html>