<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<?php
	$typeOfFan = $_POST["type"] = $_POST["portable"];
	$price = 0.0;
	
	
	
	if($typeOfFan == "portable")
	{
		//variables for portable fans
		$handHeld = $_POST["handheld"]; //string
		$texture = $_POST["texture"]; //string
		$blades = intval($_POST["bladeAmount"]); //string
		if($handHeld == "yes")
		{
			$price += 1.34;
		}
		else
		{
			$price += .15;
		}
		
		if($texture == "plastic")
		{
			$price += 1.22;
		}
		elseif($texture == "foam")
		{
			$price += 5.02;
		}
		elseif($texture == "metal")
		{
			$price += 15.10;
		}
		$price += $blades * .05;
		echo "The price of your new portable fan will be " . $price;
	}
	
	
	
	
	?>
</body>
</html>