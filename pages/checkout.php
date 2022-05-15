<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<?php
	$typeOfFan = $_POST["type"];
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
	
	if($typeOfFan == "plugin")
	{
		//variables for plugin fans
		$color = $_POST["color"]; //string
		$plug = $_POST["plug"]; //string
		$water = $_POST["waterspray"]; //string
		
		if($plug == "android")
		{
			$price += 2;
		}
		elseif($plug == "iphone")
		{
			$price += 4.02;
		}
		elseif($plug == "usb")
		{
			$price += 1.10;
		}
		
		if($water == "yes")
		{
			$price += 3.21;
		}
		elseif($water == "no")
		{
			$price += 0.06;
		}
		echo "The price of your new plugin fan will be " . $price;
	}
	
	if($typeOfFan == "top")
	{
		//variables for ceiling fans
		$size = $_POST["size"]; //string
		$texture = $_POST["texture"]; //string
		$blades = intval($_POST["bladeAmount"]); //string
		if($size == "small")
		{
			$price += 32.10;
		}
		elseif($size == "medium")
		{
			$price += 47.12;
		}
		elseif($size == "large")
		{
			$price += 52.09;
		}
		
		if($texture == "hardwood")
		{
			$price += 1.22;
		}
		elseif($texture == "metallic")
		{
			$price += 5.02;
		}
		elseif($texture == "plastic")
		{
			$price += .10;
		}
		$price += $blades * .10;
		echo "The price of your new portable fan will be " . $price;
	}
	
	
	?>
</body>
</html>