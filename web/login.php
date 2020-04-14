<?php
include 'authentication.php';

$email = $_POST['email'];
$password = $_POST['password'];

if(($email == "")||($password == "")){
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

$sql = "SELECT name, password FROM member WHERE email=?";
$statement = $connection->prepare($sql);

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}
		
$statement->execute(array($email));
$result=$statement->fetch();

if($result==FALSE){
	echo("It was not found an account with the provided e-mail address");
	exit();
}

if(password_verify($password,$result['password'])){
	session_start();
	session_regenerate_id(TRUE);
	$_SESSION['name'] = $result['name'];
	$_SESSION['email'] = $email;
	header("Location: home.php");
}else{
	echo("The password is incorrect");
}

$statement=null;
$connection=null;
?>