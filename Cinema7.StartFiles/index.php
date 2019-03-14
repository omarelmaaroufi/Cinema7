<?php
session_start();
require('./Configuratie.php');
require('./Modules/Functies.php');

/*
	Opdracht PM04 STAP 2: Verwacht in de bioscoop
	Omschrijving: Roep de functie ConnectDB aan en stop het resultaat in de variabele $pdo
*/



/*
	Opdracht PM03 STAP 2: Bioscoop Modulair
	Omschrijving: Lees de variabele pagina in middels de GET methode
*/



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Style.css" />
	<title>Cinema 7</title>
</head>
<body>
<header>
	<img src="./Images/logo.jpg" id="Logo" alt="Cinema 7 Logo" />
</header>
<div id="MenuWrapper">
	<nav>
		<?php
			require('./Modules/Menu.php');
		?>
	</nav>
</div>
<div id="MainWrapper">
	<div id="Banner"></div>
	<main>
		<?php
			/*
				Opdracht PM03 STAP 3: Bioscoop Modulair
				Omschrijving: Maak een switch-statement waarin aan de hand van
							  het pagina nr de juiste module wordt geladen
			*/
			


		?>
	</main>
</div>
</body>
</html>