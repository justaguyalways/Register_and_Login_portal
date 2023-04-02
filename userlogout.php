<html>
	<body> 
        <a href="userlogin.php">Link to the login page</a></br>
	</body>
</html>
<?php 
session_start();
$_SESSION = array();
$_SESSION['testcomplete'] = 'yes';
echo "Logged out successfully";
exit();
?>