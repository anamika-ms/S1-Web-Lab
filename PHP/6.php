<html>
	<body>
	<center>
	<h2>Add Two Numbers</h2>
	<form method="post">
		<label for="num1">Enter first number</label>
		<input type="number" name="num1" id="num1" required>
		<br><br>
		<label for="num2">Enter second number</label>
		<input type="number" name="num2" id="num2" required>
		<br><br>
		<input type="submit" value="submit">
	</form>
	
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$num1=$_POST['num1'];
			$num2=$_POST['num2'];
			$sum=$num1+$num2;
			echo"The sum of $num1 and $num2 is.$sum";
		}
	?>
	</center>
	</body>
</html>
