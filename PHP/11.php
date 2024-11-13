<html>
	<body>
	<center>
	<h2>Array Sort</h2>
	<form method="post">
		<label for="array">Enter comma seprated array elements</label>
		<input type="text" name="array" id="array" required>
		<br><br>
		<input type="submit" value="submit">
	</form>
	
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$array=explode(",",$_POST['array']);
			rsort($array);
			echo"Array in reverse order : ".implode(",",$array);
		}
	?>
	</center>
	</body>
</html>
