<html>
	<body>
	<center>
	<h2>Student Grade</h2>
	<form method="post">
		<label for="marks">Enter your mark</label>
		<input type="number" name="marks" id="marks" required>
		<br><br>
		<input type="submit" value="submit">
	</form>
	
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$marks=$_POST['marks'];
			if($marks >= 60)
			{
				echo "first division.";
			}
			elseif($marks >= 45 && $marks <= 59)
			{
				echo "Second division.";
			}
			elseif($marks >=33 && $marks <= 44)
			{
				echo "Third division.";
			}
			else
			{
				echo "Fail.";
			}
		}
	?>
	</center>
	</body>
</html> 
			 
			
