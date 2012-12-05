<?php

	require_once('template.inc.php');

	echoHtmlHeader();
	echoMenu();


	// iets in comments

	echo '<p>iets!</p>';

	# public var foo:int = new int(4);

	/*
	$foo = 4;

	$foo = "string";

	$foo = 3.45454545;

	$foo = true;

	$foo = array();
	*/

	$broodVanDeWeek = "Meergranen bol";
	$kaas = "Emmenthaler";
	$jam = "Huisgemaakte aardbeienjam";

	echo '
	<a href="'.$_SERVER['PHP_SELF'].'?bestelling=kaas">Kaas</a> |
	<a href="'.$_SERVER['PHP_SELF'].'?bestelling=jam">Jam</a>
	';

	if( isset($_GET['bestelling']) && $_GET['bestelling'] == "kaas" ){
		echo "<p>".$broodVanDeWeek." met ".$kaas."</p>";
	}else{
		echo "<p>".$broodVanDeWeek." met ".$jam."</p>";
	}



	echoFooter();
?>