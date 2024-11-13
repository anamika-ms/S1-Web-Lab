<html>
	<body>
	<center>
		<h2>PRIME NUMBERS</h2>
		<form method="post">
			<label for="number">Enter a number</label>
			<input type="number" name="number" id="number" required>
			<br><br>
			<input type="submit" value="submit">
		</form>
		
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$n=$_POST['number'];
				$sum=0;
				for($i=2;$i<$n;$i++)
				{
					$prime=true;
					for($j=2;$j<=sqrt($i);$j++)
					{
						if($i % $j == 0)
						{
							$prime=false;
							break;
						}
					}
					if($prime)
					{
						$sum += $i;
					}
				}
				echo "Sum of prime numbers less than $number is : ".$sum;
			}
		?>
	</center>
	</body>
</html>			
