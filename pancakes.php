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
	<title>Pancakes</title>
	<link rel = "reset" type = "text/css" href = "styles/reset.css">
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
							<li><a href="calendar.php" style = "color: rgb(0,0,0)">Calendar</a></li>
							<li><a href="meatballs.php" style = "color: rgb(0,0,0)">Meatballs Recipe</a></li>
							<li><a href="pancakes.php" style = "color: rgb(250,0,0)">Pancakes Recipe</a></li>
							<li><a href="login.php" style = "color: rgb(0,0,0)">Log In</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>

	Pancake Recipe


	<?php

	$dbcon = new mysqli("localhost", "root", "kjr17ww97", "database1");

	if ($dbcon->connect_errno)
	{
		exit("error");
	}

	$result = $dbcon->query('SELECT * FROM comments JOIN credentials ON comments.user_id = credentials.id WHERE type=2');

	while ($row = $result->fetch_assoc())
	{

		//$result->fetch_assoc();
		/*echo '
		<div class="comment-container">
		<div class="comment-username">'.$row['username'].'</div>
		<div class="comment-text">'.$row['comment'].'</div>
		</div>
		';*/

		echo ('
		<form action="deleteAction.php">
		<div class="comment-container">
		<div class="comment-username">'.$row['username']. '
		<input class="in" style="display:none;" type="text" name="type" value="pancakes" required>
		<input class="in" style="display:none;" type="text" name="comment_id" value='.$row['comment_id'].' required>
		<input class="in" style="display:none;" type="text" name="username" value='.$row['username'].' required>
		<input class="in" style="display:none;" type="text" name="comment" value=' .$row['comment'].' required>
		'.( $row["username"] = $_SESSION["user"]["username"] ? "<button type=submit>Delete</button> ": "" ).'
		</div>
		<div class="comment-text">'.$row['comment'] . ' </div>
		</div>
		</form>
		');
	}

	if(isset($_SESSION["user"]))
	{
		echo '<form action="recipeActions.php">
		<div class="imgcontainer">
		</div>
		<br>
		<div class="container">
		<label><b>Write a comment</b></label>
		<input class="in" type="text" name="comment" required>
		<input class="in" style="display:none;" type="text" name="type" value="pancakes" required>
		</div>
		<br>
		<div class="container">
		<button type="submit">Submit</button>
		</div>
		</form>';

	}
	?>

</body>
</html>
