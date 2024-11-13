<html>
	<body>
	<center>
	<h2>Area of Triangle</h2>
	<form method="post">
		<label for="height">Enter height</label>
		<input type="number" name="height" id="height" required>
		<br><br>
		<label for="base">Enter base</label>
		<input type="number" name="base" id="base" required>
		<br><br>
		<input type="submit" value="submit">
	</form>
	
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$height=$_POST['height'];
			$base=$_POST['base'];
			$area=0.5*$height*$base;
			echo"The area of triangle : $area";
		}
	?>
	</center>
	</body>
</html>
