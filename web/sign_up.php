<?php
include 'authentication.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_retype = $_POST['password_retype'];

if(($name == "")||($email == "")||($password == "")||($password_retype == "")){
	echo("Please don't leave any empty field!");
	exit();
}

if($password!=$password_retype){
	echo("Password and Retype password fields must match");
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

$sql = "SELECT email FROM member WHERE email=?";
$statement = $connection->prepare($sql);

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}
		
$statement->execute(array($email));

if($statement->rowCount()!=0){
	echo("There is already an account with the provided e-mail address");
	exit();
}

$sql = "INSERT INTO member VALUES (?,?,?)";
$statement = $connection->prepare($sql);

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}

$password_hash = password_hash($password,PASSWORD_DEFAULT);
$statement->execute(array($email,$name,$password_hash));

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}

$statement=null;
$connection=null;
?>
<html>
	<head>
		<title>Sign-up Success - HackerSchool Forum</title>
	</head>
	<body>
		<p>Your account was created <a href="index.htm">Click here to log-in</a></p>
	</body>
</html>