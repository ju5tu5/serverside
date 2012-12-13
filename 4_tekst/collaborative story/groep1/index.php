<?php
# include de benodigde bestanden (require geeft een fatale fout als het niet lukt)
require('../../inc/config.inc.php');
require('../../inc/functions.inc.php');
require('../../inc/template.inc.php');

# geef de HTML code voor het openen van de pagina weer
htmlOpenen('Collaborative story');

# begin het verhaal
$verhaal = "er was eens een pindarotsje. ";

# justus
$aantalvrienden = 1;
$verhaal = preg_replace('/pindarotsje/', 'kannibaal', $verhaal);
$verhaal .= " deze kannibaal woonde op een tropisch eiland.";

# Sophie
$aantalvrienden++;
$verhaal = preg_replace('/kannibaal/', strrev("kannibaal"), $verhaal); 

#Bram
$aantalvrienden++;
$verhaal = ucwords($verhaal);

# Wesley
$aantalvrienden++;
$verhaal .= "Omdat het erg warm was en hij de exacte temperatuur wou weten bedacht hij een meetsysteem.";
$verhaal = preg_replace('/meetsysteem/', strrev("meetsysteem"), $verhaal); 


#Raymond&Ivo
$verhaal .= " hij zat nu op het eiland met ". $aantalvrienden ." vrienden.";
$verhaal .= " maar helaas kreeg hij honger";
$aantalvrienden--; 

#justus
$aantalvrienden+=666;
$subverhaal = split('[.]', $verhaal);
$verhaal = "";
foreach($subverhaal as $key=>$value){
	$verhaal .= ucfirst(trim(strtolower($value))).". ";

}

#lucienkareem

$patterns = array();
$patterns[0] = '/e/';
$patterns[1] = '/s/';
$patterns[2] = '/o/';
$patterns[3] = '/a/';
$patterns[4] = '/t/';
$patterns[5] = '/n/';
$patterns[6] = '/h/';

$replacements = array();
$replacements[0] = '3';
$replacements[1] = '5';
$replacements[2] = '0';
$replacements[3] = '4';
$replacements[4] = '+';
$replacements[5] = '|\|';
$replacements[6] = '|-|';

$verhaal = preg_replace($patterns, $replacements, $verhaal);




# Jeffrey
$aantalvrienden++;
$verhaal .= " Hij had na dit verhaal ". $aantalvrienden ." vrienden.";


# Stuur de output naar de browser
echo $verhaal;

# geef de HTML code voor het sluiten van de pagina weer
htmlSluiten();
?>