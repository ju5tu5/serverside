<?php

	require_once('template.inc.php');

	echoHtmlHeader();
	echoMenu();

	// Iets geheims

	echo '<p>Alles wat je hierin typt</p>';
	

	# public var foo:int = new int(4);

	$foo = 4;
	$foo = "een tekst";
	$foo = 5.4343434;
	$foo = true;
	$foo = array();

	echo '
	<a href="'.$_SERVER['PHP_SELF'].'?lunchKeuze=kaas">kaas!</a> |
	<a href="'.$_SERVER['PHP_SELF'].'?lunchKeuze=jam">jam!</a> |
	<a href="'.$_SERVER['PHP_SELF'].'?lunchKeuze=pindakaas">pindakaas!</a>
	';

	$lunchBroodje = "Meergranen bol";
	$kaas = "Emmenthaler";
	$jam = "Huisgemaakte aarbeienjam";
	$pindakaas = "Pindakaas met stukjes noot :D";


	if (isset($_GET['lunchKeuze']) && $_GET['lunchKeuze'] == "kaas") {

		echo "<p>".$lunchBroodje." met ".$kaas."</p>\r\n";
			
	} elseif(isset($_GET['lunchKeuze']) && $_GET['lunchKeuze'] == "pindakaas") {

		echo "<p>".$lunchBroodje." met ".$pindakaas."</p>\r\n" ;

	} else {

		echo "<p>".$lunchBroodje." met ".$jam."</p>\r\n" ;
	}


	echoFooter();
?>
		