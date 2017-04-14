<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>MeuSite.com</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

	</head>
	<body>
	<div>
		<?php
			include_once("paginasPhp/topo.php");
			include_once("paginasPhp/menu.php");
			
			if(empty($_SERVER["QUERY_STRING"])){
					$var = "paginasPhp/conteudo.php";
					include_once("$var");
			}else{
				$pg = $_GET['pg'];
					include_once("paginasPhp/$pg.php"); 
			}
			
			include_once("paginasPhp/rodape.php");
		?>
	</div>
	</body>
</html>