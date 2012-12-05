<?php
	
	/* // Hoe maak je een variabele in PHP
	$kaas = "Emmenthaler";
	$aantal = 10;
	$breuk = 21 / 4; // floating point
	$breuk = 12;	 // integer (N+)
	
	$radiator 
	$jam
	$kaas
	$aardbeien
	*/

	
	require('template.inc.php');

	echoHtmlHeader();
	echoMenu();

	// Hoe maak je een eenvoudig GET gebaseerd keuzesysteem
	echo '
	<a href="'.$_SERVER['PHP_SELF'].'?belegKeuze=kaas">Broodje Kaas</a> |
	<a href="'.$_SERVER['PHP_SELF'].'?belegKeuze=jam">Broodje Jam</a>
	';

	$waarHebIkZinIn = addslashes(@$_GET['belegKeuze']);
	
	$broodje = "Boterham";
	$jam = "Aardbeienjam";
	$kaas = "Emmenthaler";

	if ($waarHebIkZinIn == "kaas") {
		$belegdBroodje = "<p>". $broodje ." met ". $kaas . "</p>";
	} else {
		$belegdBroodje = "<p>". $broodje ." met ". $jam . "</p>";
	}
	echo $belegdBroodje;

	echoFooter();

?>