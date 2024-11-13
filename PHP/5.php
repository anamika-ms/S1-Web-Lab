<html>
	<body>
	<center>
	<h2>Positive / Negative</h2>
	<form method="post">
		<label for="marks">Enter a number</label>
		<input type="number" name="number" id="number" required>
		<br><br>
		<input type="submit" value="submit">
	</form>
	
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$number=$_POST['number'];
			if($number > 0)
			{
				echo "Positive number.";
			}
			elseif($number < 0)
			{
				echo "Negative number.";
			}
			else
			{
				echo "Zero.";
			}
		}
	?>
	</center>
	</body>
</html> 
			 
			
