<?php
include 'authentication.php';

//get fields
$email = //TO DO
$name = //TO DO

if(($email == "")||($name == "")){
	echo("Please don't leave any empty field!");
	exit();
}

//Do connection
try{
	$connection = new PDO($dsn, $user, $pass);
}
catch(PDOException $exception){
	echo("Error: ");
	echo($exception->getMessage());
	exit();
}

$sql = //TO DO
$statement = $connection->prepare($sql);

if ($statement == FALSE){
	$info = $connection->errorInfo(); //get error
	echo("<p>Error: $info[2]</p>");
	exit();
}
		
$statement->//TO DO
$result= //TO DO

if($result==FALSE){
	$sql = //TO DO
	$statement = //TO DO

	if ($statement == FALSE){
		$info = $connection->errorInfo();
		echo("<p>Error: $info[2]</p>");
		exit();
	}

	//TO DO
}elseif($result['name']!=$name){
	echo("There is already a user that uses that e-mail with a diferent name");
	exit();
}

//TO DO

//TO DO

$statement=null;
$connection=null;
?>