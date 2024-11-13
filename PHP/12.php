<html>
	<body>
	<center>
	<h2>EXTRACTION</h2>
	<form method="post">
		<label for="email">Enter your email</label>
		<input type="email" name="email" id="email" required>
		<br><br>
		<input type="submit" value="submit">
	</form>
	
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$email=$_POST['email'];
			$username=strstr($email,'@',true);
			echo"The username from your email is  : ".$username;
		}
	?>
	</center>
	</body>
</html>
