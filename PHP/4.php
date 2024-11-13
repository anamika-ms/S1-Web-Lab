<html>
	<body>
	<center>
		<h2>FACTORIAL</h2>
		<form method="post">
			<label for="number">Enter a number</label>
			<input type="number" name="number" id="number" required>
			<br><br>
			<input type="submit" value="submit">
		</form>
		
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$number=$_POST['number'];
				function factorial($number)
				{
					$fact=1;
					for($i=1;$i<=$number;$i++)
					{
						$fact*=$i;
					}
					return $fact;
				}
				echo "Factorial of $number is : ".factorial($number);
			}
		?>
	</center>
	</body>
</html>			
