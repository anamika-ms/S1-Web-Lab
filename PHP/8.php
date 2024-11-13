<html>
	<body>
	<center>
	<h2>DIVISION</h2>
	<form method="post">
		<label for="number">Enter number</label>
		<input type="number" name="number" id="number" required>
		<br><br>
		<label for="divisor">Enter divisor</label>
		<input type="number" name="divisor" id="divisor" required>
		<br><br>
		<input type="submit" value="submit">
	</form>
	
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$number=$_POST['number'];
			$divisor=$_POST['divisor'];
			
			if($number%$divisor==0)
			{
				echo "$number is divisible by $divisor.";
			}
			else
			{
				echo "$number is not divisible by $divisor.";
			}
		}
	?>
	</center>
	</body>
</html> 
