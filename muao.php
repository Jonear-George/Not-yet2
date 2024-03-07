<!DOCTYPE html>
<html>
<head>
	<title>School or Holiday?</title>
	<style>
		form {
			margin: 50px auto;
			width: 300px;
			text-align: center;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-size: 18px;
		}
		input[type="text"] {
			padding: 10px;
			font-size: 18px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px gray;
			margin-bottom: 20px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			font-size: 18px;
			transition: background-color 0.3s ease;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"]:hover {
			background-color: #3E8E41;
		}
		p {
			font-size: 18px;
			margin-top: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
	<form method="post" action="">
		<label for="day">Type a day:</label>
		<input type="text" name="day" required>
		<input type="submit" name="submit" value="Check">
	</form>
	
	<?php
		// Check if the form has been submitted
		if (isset($_POST['submit'])) {
			$day = $_POST['day'];
			if (strcasecmp($day, 'Monday') == 0 || strcasecmp($day, 'Tuesday') == 0 || strcasecmp($day, 'Wednesday') == 0 || strcasecmp($day, 'Thursday') == 0 || strcasecmp($day, 'Friday') == 0) {
				echo "<p>$day is a school day.</p>";
			} elseif (strcasecmp($day, 'Saturday') == 0 || strcasecmp($day, 'Sunday') == 0) {
				echo "<p>$day is a holiday.</p>";
			} else {
				echo "<p>$day is not a valid day of the week.</p>";
			}
		}
	?>
</body>
</html>