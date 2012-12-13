<?php
# include de benodigde bestanden (require geeft een fatale fout als het niet lukt)
require('../../inc/config.inc.php');
require('../../inc/functions.inc.php');
require('../../inc/template.inc.php');

# geef de HTML code voor het openen van de pagina weer
htmlOpenen('Collaborative story');

# begin het verhaal
$verhaal = "Er was eens een pindarotsje, ";

# Justus
$verhaal = preg_replace('/pindarotsje/', 'kannibaal', $verhaal);
$verhaal .= " deze kannibaal woonde op een tropisch eiland.";
$verhaal .= "<br/ >";
$verhaal = str_repeat($verhaal, 2);
$verhaal .= "Hij was helemaal alleen. ";
//$verhaal = str_shuffle($verhaal);
$verhaal = strtoupper($verhaal);
$verhaal = preg_replace('/e/i', '3', $verhaal);
$verhaal = preg_replace('/a/i', '4', $verhaal);
$verhaal = preg_replace('/b/i', 'I3', $verhaal);
$verhaal = preg_replace('/o/i', '0', $verhaal);
$verhaal = preg_replace('/t/i', '7', $verhaal);
$verhaal = preg_replace('/i/i', 'l', $verhaal);
$verhaal = preg_replace('/u/i', '(_)', $verhaal);
$verhaal .="Maar plotseling ziet hij in de verte een boot aan komen en hij dacht, \"Yeey avond eten!\" ";
$verhaal = strrev($verhaal);
$verhaal .= "De kanibaal heet o' Reily";
$verhaal = addslashes($verhaal);
$verhaal = strrev($verhaal);
$verhaal = preg_replace('/Yeey avond eten!/', 'De kroeg in!', $verhaal);
$verhaal = preg_replace('/3R W4S 33NS 33N K4NNll344L/', 'Er zitten 2 koeien in een boom te kaarten', $verhaal);
$verhaal = preg_replace('/K4NNll344L/', 'KOEIEN', $verhaal);

# Stuur de output naar de browser
echo $verhaal;

# geef de HTML code voor het sluiten van de pagina weer
htmlSluiten();
?>