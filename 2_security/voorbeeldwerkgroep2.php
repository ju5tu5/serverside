<?php
	require('template.inc.php');

	echoHtmlHeader();
	echoMenu();

	/*
	echo '<pre>';
	print_r($_SERVER);
	echo '</pre>';
	*/
	
	// Inhoud
	echo '
	<section>
	<ul>
		<li><a href="'.$_SERVER['PHP_SELF'].'?belegKeuze=kaas">Kaas</a></li>
		<li><a href="'.$_SERVER['PHP_SELF'].'?belegKeuze=jam">Jam</a></li>
	</ul>
	';

	// Alles in commentaar
	echo "<p>Alles wat je in echo zet.</p>\r\n";

	$belegdBroodje = "Boterham";
	$belegSoort = array('Kaas', 'Jam');

	if(isset($_GET['belegKeuze']) && $_GET['belegKeuze'] == 'kaas'){
		echo "<p>".$belegdBroodje." met ".$belegSoort[0]."</p>";
	}else{
		echo "<p>".$belegdBroodje." met ".$belegSoort[1]."</p>";	
	}
	echo '
	</section>
	';

	echoFooter();
?>