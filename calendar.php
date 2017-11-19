<?php session_start();

?>
<!doctype html>
<html>

<head>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

	<meta charset="utf-8">
	<title>The Tasty Recipes Website</title>
	<link rel = "stylesheet" type = "text/css" href = "styles/reset.css">
	<link rel = "stylesheet" type = "text/css" href = "styles/stylesheet.css">

</head>
<body>
	<div class="jumbotron text-center">
		<div id="wrap">
			<div id="header">
				<div id="navWrap">
					<div id="nav">
						<ul>
							<li><a href="index.php" style = "color: rgb(0,0,0)">Index</a></li>
							<li><a href="calendar.php" style = "color: rgb(250,0,0)">Calendar</a></li>
							<li><a href="meatballs.php" style = "color: rgb(0,0,0)">Meatballs Recipe</a></li>
							<li><a href="pancakes.php" style = "color: rgb(0,0,0)">Pancakes Recipe</a></li>
							<li><a href="login.php" style = "color: rgb(0,0,0)">Log In</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<table>
		<thead>
			<tr>
				<th>Sun</th>
				<th>Mon</th>
				<th>Tue</th>
				<th>Wed</th>
				<th>Thu</th>
				<th>Fri</th>
				<th>Sat</th>
			</tr>

			<tr>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<td><p>
					<a href="pancakes.php">
						<img alt = "Pancakes" src="pancakes.png" width="100" height="100">
					</a>
				</p></td>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
			</tr>
			<tr>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<td>
					<a href="meatballs.php"><img alt = Meatballs src="meatballs.png" width="100" height="100"></a>
				</td>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
			</tr>
			<tr>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
				<th><img alt = - src="blk.jpg" width="100" height="100"></th>
			</tr>
		</tbody>
	</table>
</body>
</html>
