<?php session_start();
if ($_SESSION['testcomplete'] == 'yes') {
    header("Location:cheater.php");
}
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$pwd = $_SESSION['pwd'];
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
    <center>
        <p class = "heading">
            <h1>Update Profile</h1>
    </p>
        <p class = "top">
	<form action="acupdate.php" method="post">
		<label for="FirstName">First Name : </label>
		<input type="text" id="FirstName" name="ufname" value = <?php echo $fname ?> required><br><br>

        <label for="LastName">Last Name : </label>
		<input type="text" id="LastName" name="ulname" value = <?php echo $lname ?> required><br><br>

        <label for="Password1">Password : </label>
		<input type="password" id="Password1" name="upass" value = <?php echo $pwd ?> required><br><br>

        <label for="Password2">Confirm Password:</label>
		<input type="password" id="Password2" name="uconfpass" value = <?php echo $pwd ?> required><br><br>

		<input type="submit"  value = 'Update Details' name = "Submit"> <br>
        <p>
	</form>
    <a href="welcome.php">Go back to the welcome page</a>

    </p>
    </center>

        <!-- <form action="acupdate.php" method="post" >
            First Name : <input type = "text" name = "ufname" value=<?php echo $fname ?>></br></br>
			Last Name : <input type = "text" name = "ulname" value=<?php echo $lname ?>></br></br>
			Password: <input type = "password" name = "upass" value=<?php echo $pwd ?>></br></br>
			Confirm Password: <input type = "password" name = "uconfpass" value=<?php echo $pwd ?>></br></br>
            <input type="submit" value="update">
        </form>
        <a href="welcome.php">Go back to the welcome page</a> -->
	</body>
</html>