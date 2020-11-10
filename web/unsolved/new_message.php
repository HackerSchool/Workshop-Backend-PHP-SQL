<?php
include 'authentication.php';

if (/*TO DO*/) {
	header('Location: index.htm');
	exit();
}

$message = //TO DO

try{
	$connection = new PDO($dsn, $user, $pass);
}
catch(PDOException $exception){
	echo("Error: ");
	echo($exception->getMessage());
	exit();
}

$sql = 
$statement = $connection->prepare($sql);

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}
		
$statement->execute(/* TO DO */);
$result=$statement->fetch();

$sql = //TO DO
$statement = //TO DO

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}

$statement->execute(/* TO DO */);

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}

$statement=null;
$connection=null;

header('Location: home.php');
?>