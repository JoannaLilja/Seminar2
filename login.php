
<?php session_start();
// echo "<meta http-equiv='refresh' content='0'>";


if(!isset($_SESSION["user"]))
{
	/*** connection ***/
	if(isset($_GET["username"]) && isset($_GET["password"]))
	{
		// echo 'hello'  . htmlspecialchars($_GET["username"]);

		$dbcon = new mysqli("localhost", "root", "kjr17ww97", "database1");

		if ($dbcon->connect_errno)
		{
			exit("error");
		}

		if ($result = $dbcon->query(
			'SELECT * FROM credentials WHERE username = "' . $_GET["username"] . '" AND  password= "' . $_GET["password"] .'"'
			))
		{
			//var_dump($result->fetch_assoc());
			$_SESSION["user"] = $result->fetch_assoc();
		}
		else
		{
			var_dump($dbcon->error);
		}

		$dbcon->close();

	}
}

// if($_GET["username"])
// {
// 	echo 'hello'  . htmlspecialchars($_GET["username"]);
// }

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
	<link rel = "loginStyle" type = "text/css" href = "styles/loginStyle.css">
</head>
<body>
	<div class="jumbotron text-center">
		<div id="wrap">
			<div id="header">
				<div id="navWrap">
					<div id="nav">
						<ul>
							<li><a href="index.php" style = "color: rgb(0,0,0)">Index</a></li>
							<li><a href="calendar.php" style = "color: rgb(0,0,0)">Calendar</a></li>
							<li><a href="meatballs.php" style = "color: rgb(0,0,0)">Meatballs Recipe</a></li>
							<li><a href="pancakes.php" style = "color: rgb(0,0,0)">Pancakes Recipe</a></li>
							<li><a href="login.php" style = "color: rgb(250,0,0)">Log In</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>

	<?php
	if(!isset($_SESSION["user"]))
	{
		echo '<form action="login.php">
						<div class="imgcontainer">
							* All fields required
						</div>
						<br>
						<div class="container">
							<label><b>Email or Username</b></label>
							<input class="in" type="text" placeholder="Enter Username" name="username" required>
						</div>
						<br>
						<div class="container">
							<label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="password" required>
						</div>
						<br>
						<div class="container">
							<button type="submit">Login</button>
							<button type="button" class="cancelbtn">Cancel</button>
						</div>
					</form>';

	}
	else
	{
		echo 'Welcome ' . $_SESSION["user"]["username"];
	}
	?>

</body>
</html>
