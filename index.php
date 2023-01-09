<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vicente listar</title>
</head>
<body>
	<?php
	require "./Conn.php";
	require "./ListUsers.php";

	$listUsers = new ListUsers();

	$result_users = $listUsers->list();

	foreach($result_users as $row_user) {
		

		echo "ID: ". $row_user['id'] . "<br>";
		echo "NOME: ". $row_user['name'] . "<br>";
		echo "Email: ". $row_user['email'] . "<br>";
		echo "<hr>";
	}
	?>


</body>
</html>