<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_GET["pg"])){
    $pg = $_GET["pg"];
}
else{
	$pg = "inicio";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Roteiro Nutricional</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="cyan lighten-3">
		<div class="nav-wrapper container">
			<a href="?pg=inicio" class="brand-logo">Roteiro Nutricional</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="?pg=roteiro">Configurar Roteiro</a></li>
				<li><a href="?pg=sobre">Sobre</a></li>
			</ul>
		</div>
  	</nav>

	<main id="main" class="container valign center">
		<div>
			<?php include("paginas/".$pg.".php"); ?>
		</div>
	</main>

	<footer class="page-footer footer-fixed cyan lighten-3">
        <div class="footer-copyright">
            <div class="container white-text">
           		© 2018 Copyright Text
            </div>
        </div>
    </footer>
</body>
</html>