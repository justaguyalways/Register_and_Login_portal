<!DOCTYPE html>
<html>
<style>
p.heading {
  margin-top: 150px;
}

p.top {
  margin-top: 10px;
  margin-bottom: 10px;
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
<center>
	<h1>
		Delete Account </br>
	</h1>
	<p class = "heading">
    <center><p class = "top"> Are you sure you want to delete your account?</p>
	<?php
	
		if(isset($_POST['button1'])) {
			header("Location: deleteprofile.php");
		}
		if(isset($_POST['button2'])) {
			header("Location: welcome.php");

		}
	?>
	
	<form method="post">
		<input type="submit" name="button1"
				value="Delete"/>
		
		<input type="submit" name="button2"
				value="Cancel"/>
	</form>
</center>
</head>

</html>
