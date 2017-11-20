<?php session_start();

$comment = $_GET["comment"];
$type = $_GET["type"];
$user_id = $_SESSION["user"]["id"];

$dbcon = new mysqli("localhost", "root", "kjr17ww97", "database1");

if ($dbcon->connect_errno)
{
  exit("error");
}

$type_id = $dbcon->query('SELECT * FROM recipe WHERE name="'.$type.'"')->fetch_assoc()['id'];

var_dump($user_id);

$dbcon->query(
  'INSERT INTO comments (user_id, type, comment) VALUES ('. $user_id .', ' . $type_id . ', "' . $comment . '")');

$dbcon->close();

header('Location: '.$type.'.php');

?>
