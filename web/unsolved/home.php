<?php
if (/* TO DO */) {
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

$sql = //TO DO
$statement = //TO DO

if ($statement == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}
		
$statement->//TO DO
$result=//TO DO

$name=//TO DO

$sql = //TO DO
$result = //TO DO

if ($result == FALSE){
	$info = $connection->errorInfo();
	echo("<p>Error: $info[2]</p>");
	exit();
}

?>
<!-- PHP END -->
<!------------------------------------------------>
<!-- HTML START -->
<html>
	<head>
		<title>HackerSchool Forum</title>
	</head>
	<body>
		<table style="margin: auto; max-width: 800px; width: 100%; border: 3px solid green;">
			<tr>
				<th style="text-align: left;"><img src="logo_HS.png" width="200"></th>
				<th style="text-align: right;">
					<p>
						<!-- PHP TO DO--> 

						| <a href="logout.php">Log-out</a>
					</p>
				</th>
			</tr>

<!------------------------------------------------>
<!-- PHP TO DO -->
			<tr>
				<th colspan="2" style="text-align: left;">NOME DE UTILIZADOR at DATA:</th>
			</tr>
			<tr>
				<th colspan="2" style="text-align: justify;"> MENSAGEM </th>
			</tr>
<!-- PHP TO DO -->
<!------------------------------------------------>

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