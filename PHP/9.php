<html>
	<body>
	<center>
		<h2>ARMSTRONG</h2>
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
				function armstrong($num)
				{
					$sum=0;
					$temp=$num;
					while($temp!=0)
					{
						$digit=$temp%10;
						$sum+=$digit*$digit*$digit;
						$temp=floor($temp/10);
					}
					return $sum==$num;
				}
				if(armstrong($number))
				{
					echo "$number is Armstrong.";
				}
				else
				{
					echo"$number is not Armtrong.";
				}
			}
		?>
	</center>
	</body>
</html>			
