<?php
# include de benodigde bestanden (require geeft een fatale fout als het niet lukt)
require('../inc/config.inc.php');
require('../inc/functions.inc.php');
require('../inc/template.inc.php');

# geef de HTML code voor het openen van de pagina weer
htmlOpenen('Leeftijd uitrekenen');

setlocale(LC_ALL, 'nl_NL');

//

# Stel de target datum in
/*
	// VOOR PASCAL!!!!111oneone
	
	if(tijdstip > 17.00)
		neem tijd morgen 17.00 uur
	else
		neem tijd vandaag 17.00 uur

	bereken het verschil

*/
$worldsEnd = strtotime();

# Bereken hoe lang geleden je geboren bent
$verschil = diff($worldsEnd);

echo 'De wereld vergaat over '.$verschil['year'].' jaar, '.$verschil['month'].' maanden, '.$verschil['day'].' dagen, '.$verschil['hour'].' uur, '.$verschil['min'].' minuten en '.$verschil['sec'].' seconden.';



// */

echo "<br/>".time();
echo "<br/>".date('H:i D j.n.Y');

# geef de HTML code voor het sluiten van de pagina weer
htmlSluiten();
?>