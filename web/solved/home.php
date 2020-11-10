<?php
if (!isset($_COOKIE['name'])) {
	header('Location: index.htm');
	exit();
}

include 'authentication.php';

try{
	$connection = new PDO($dsn, $user, $pass);
}
catch(PDOException $exception){
	echo("Error: ");
	echo($exception->getMessage());
	exit();
}

$sql = "SELECT member.name AS name, member.email AS email, messages.date AS date, messages.text AS text FROM member, messages WHERE member.email=messages.email ORDER BY messages.date ASC";
$result = $connection->query($sql);

if ($result == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}

?>
<html>
	<head>
		<title>HackerSchool Forum</title>
	</head>
	<body>
		<table style="margin: auto; max-width: 800px; width: 100%; border: 3px solid green;">
			<tr>
				<th style="text-align: left;"><img src="logo_HS.png" width="200"></th>
				<th style="text-align: right;"><p><?=$_COOKIE['name']?> | <a href="logout.php">Log-out</a></p></th>
			</tr>
<?php
foreach($result as $row):
?>
			<tr>
				<th colspan="2" style="text-align: left;"><?=$row['name']?> at <?=$row['date']?>:</th>
			</tr>
			<tr>
				<th colspan="2" style="text-align: justify;"><?=$row['text']?></th>
			</tr>
<?php
endforeach;
$connection=null;
?>
			<tr>
				<th colspan="2">
					<form action="new_message.php" method="post">
						<textarea name="text" rows="4" cols="50"></textarea>
						<input type="submit" value="Send message">
					</form>
				</th>
			</tr>
		</table>
	</body>
</html>