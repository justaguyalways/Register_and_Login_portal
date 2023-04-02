
<html>
	<body> 
        Information updated successfully </br>
        <a href="userlogin.php">Link to the login page</a></br>
	</body>
</html>

<?php 
session_start();
$_SESSION = array();
$_SESSION['testcomplete'] = 'yes';
exit();
?>