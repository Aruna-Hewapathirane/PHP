<!DOCTYPE html>
<html>
<head>
	<title>PHP System Info - Linux [ Get Value of Select Option and Radio Button ]</title> 
	
	<!-- Include CSS File Here-->
	<link href="style.css" rel="stylesheet">
	
	<!-- Include Google Fonts CSS File Here-->
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	
</head>

<body>
<div class="container">
	<div class="main">
		<h2>PHP Multiple Select Options and Radio Buttons</h2>
		<form action="three.php" method="post">
		<!----- Select Option Fields Starts Here ----->
			<label class="heading">To Select Multiple Options Press ctrl+left click :</label>
			<select multiple name="Color[]">
				<option value="lscpu">CPU</option>
				<option value="lsb_release -a">Distro</option>
				<option value="lsusb">USB</option>
			</select><br/>
			
			<?php include'select_value.php'; ?>

			<!---- Radio Button Starts Here ----->

			<label class="heading">Radio Buttons :</label>
			<input name="radio" type="radio" value="lscpu">Radio 1
			<input name="radio" type="radio" value="Radio 2">Radio 2
			<input name="radio" type="radio" value="Radio 3">Radio 3
			<input name="radio" type="radio" value="Radio 4">Radio 4
			
			<?php include'radio_value.php'; ?>
			
			<input name="submit" type="submit" value="Get Selected Values">
		</form>
	</div>
</div>
</body>
</html>
