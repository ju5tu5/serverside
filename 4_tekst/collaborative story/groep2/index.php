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
$verhaal .= " deze kannibaal woonde op een tropisch eiland. ";

#Renske en Anne
$verhaal .= "Zijn perceptie vermogen was slechts zo groot als dat van een guppie. ";
$verhaal = strrev($verhaal);

#Bas
$verhaal = strrev($verhaal);
$verhaal .= "Gelukkig was zijn beste vriend een guppie. ";
$verhaal = strtoupper($verhaal);

#Simone
$verhaal = preg_replace('/een guppie/i', 'Albert Einstein', $verhaal);
$verhaal = lcfirst($verhaal);

#Jip en Jurgen
$verhaal .= "De kannibaal had best wel honger. Hij had zin in lekker eten. Wat is er nou lekkerder dan:";
$verhaal = preg_replace('[\s]', 'lekker eten', $verhaal);

#justus
$verhaal = preg_replace('/lekker eten/', ' ', $verhaal);

#Michael & Justin

$verhaal = str_repeat($verhaal, 2);

#justus
for ($i=0; $i < strlen($verhaal); $i++) { 
	$verhaal[$i] = ($i%2==0)?strtolower($verhaal[$i]):strtoupper($verhaal[$i]);
}

#Jane
$verhaal = preg_replace('/kannibaal/i', 'Justus', $verhaal);
$verhaal = preg_replace('/honger/i', 'een baard', $verhaal);


#justus
$subverhaal = split('[.]', $verhaal);
$verhaal = "";
foreach($subverhaal as $key=>$value){
	$verhaal .= ucfirst(trim(strtolower($value))).". ";
}
$verhaal = preg_replace('/justus/', 'Justus', $verhaal);
$verhaal = preg_replace('/een Justus/', 'de Justus', $verhaal);
$verhaal = preg_replace('/perceptie vermogen/', 'baard', $verhaal);


#Jim
$word_array = explode(" ", $verhaal);

for($i=0; $i< count($word_array); $i++){
	if(strlen($word_array[$i]) < 4){
		$word_array[$i] = "";
	}
}

$verhaal = implode(" ", $word_array);

$word_array = explode(".", $verhaal);

for($i=0; $i< count($word_array); $i++){	
		$word_array[$i] = ucfirst($word_array[$i]);
}

$verhaal = implode(".", $word_array);
$verhaal = ucfirst($verhaal);

# Jip en Arno Paul
$verhaal = preg_replace('/[aeiouy]/i', ' ', $verhaal);

# Stuur de output naar de browser
echo $verhaal;

# geef de HTML code voor het sluiten van de pagina weer
htmlSluiten();
?>