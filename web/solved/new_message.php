<?php
include 'authentication.php';

if (!isset($_COOKIE['email'])) {
	header('Location: index.htm');
	exit();
}

$message = $_POST['text'];

try{
	$connection = new PDO($dsn, $user, $pass);
}
catch(PDOException $exception){
	echo("Error: ");
	echo($exception->getMessage());
	exit();
}

$sql = "INSERT INTO messages VALUES (?,now(),?)";
$statement = $connection->prepare($sql);

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}

$statement->execute(array($_COOKIE['email'],$message));

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}

$statement=null;
$connection=null;

header('Location: home.php');
?>