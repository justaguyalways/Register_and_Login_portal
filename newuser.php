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
        <center><h1>User Registration</h1></p>
    <p class = "top">
		<form action="adduser.php" method="post">
			First Name : <input type = "text" name = "ufname"/></br></br>
			Last Name : <input type = "text" name = "ulname"/></br></br>
			Email: <input type = "text" name = "uemail" /></br></br>
			Password: <input type = "password" name = "upass" /></br></br>
			Confirm Password: <input type = "password" name = "uconfpass" /></br></br>
			<input type="submit" />	
	 	</form>
        </br>
        Already a user -
        <a href="userlogin.php">Login to an existing account</a>
	</body>
</html>