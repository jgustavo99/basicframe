<html lang="pt-BR">
<head>
	<title>Apenas um teste!</title>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
		/*
		 * Isso é apenas um Exemplo, ele irá listar os users conforme retornado da Controller
		 */
		foreach($users as $user)
		{
			echo "<p>ID: {$user['id']}</p>";
			echo "<p>Nome: {$user['name']}</p>";
			echo "<p>E-mail: {$user['email']}</p> <br>";
		}
	?>
</body>
</html>