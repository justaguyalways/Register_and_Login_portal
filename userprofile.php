<?php session_start();
if ($_SESSION['testcomplete'] == 'yes') {
        header("Location:cheater.php");
}?>
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
tr{
    font-size: 23px;
}
</style>
	<body>
        <p class = "heading">
    <center><h1>Profile Info</h1></p>
        <table>
        <tr>
        <td><b>First Name - </td>
        <td> <?php
        $fname = $_SESSION['fname'];
        echo "$fname";
        ?></td>
        </tr>
        <tr>
        <td><b>Last Name - </td>
        <td> <?php
        $lname = $_SESSION['lname'];
        echo "$lname";
        ?></td>
        </tr>
        <tr>
        <td><b>Email - </td>
        <td> <?php
        $email = $_SESSION['email'];
        echo "$email";?></td>
        </tr>
        </table>

        <a href="welcome.php">Go back to the welcome page</a>
	</body>
</html>