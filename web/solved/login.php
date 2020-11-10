<?php
include 'authentication.php';

$email = $_POST['email'];
$name = $_POST['name'];

if(($email == "")||($name == "")){
	echo("Please don't leave any empty field!");
	exit();
}

try{
	$connection = new PDO($dsn, $user, $pass);
}
catch(PDOException $exception){
	echo("Error: ");
	echo($exception->getMessage());
	exit();
}

$sql = "SELECT name FROM member WHERE email=?";
$statement = $connection->prepare($sql);

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}
		
$statement->execute(array($email));
$result=$statement->fetch();

if($result==FALSE){
	$sql = "INSERT INTO member VALUES (?,?)";
	$statement = $connection->prepare($sql);

	if ($statement == FALSE){
		$info = $connection->errorInfo();
		echo("<p>Error: $info[2]</p>");
		exit();
	}

	$statement->execute(array($email,$name));
}elseif($result['name']!=$name){
	echo("There is already a user that uses that e-mail with a diferent name");
	exit();
}

setcookie("name",$name);
header("Location: home.php");

$statement=null;
$connection=null;
?>