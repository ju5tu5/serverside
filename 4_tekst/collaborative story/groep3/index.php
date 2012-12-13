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

# Piet
$verhaal.= "Het monster gooit de zinnen in de war.";
$verhaal .= str_shuffle($verhaal);

# Jeffrey
$verhaal .= "<br /> De vrouw van de kannibaal vroeg wat hij bedoelde.";

# Maik
$verhaal .= " De kannibaal boeide dat niks en at de vrouw op. ";

#Vincent
$verhaal = preg_replace('/de /', 'in ', $verhaal);
$verhaal = preg_replace('/monster/', 'Justus', $verhaal);
$verhaal .= " Nadat hij zijn trucje had geflikt, was ik naar buiten gerend en zag dat dit boertje niet al te best bij been was";
$verhaal .= "Hij begreep er natuurlijk niets van en toen ik me weer besefte dat hij doofstom was, wenkte ik hem";
$verhaal .= strtoupper('natuurlijk niets van toen ik me weer');
$verhaal .= lcfirst('Nadat hij zijn trucje had geflikt');

#Gavin (& ju5tu5)

$patterns[] = '/e/';
$patterns[] = '/a/';
$patterns[] = '/n/';
$patterns[] = '/t/';
$patterns[] = '/s/';

$replace[] = '3';
$replace[] = '4';
$replace[] = '|\|';
$replace[] = '+';
$replace[] = '5';

$verhaal = preg_replace($patterns, $replace, $verhaal);
//$verhaal = preg_replace('/e/', '3', $verhaal);
//$verhaal = preg_replace('/e/', '3', $verhaal);
//$verhaal = preg_replace('/e/', '3', $verhaal);
$verhaal .= ". Dit schreef ik in mijn laatste sms.";

#maurice

$verhaal = strrev($verhaal);

#Chris
$verhaal = '<h1>Famous last words..</h1><blockquote>&ldquo;<i>'.$verhaal.'</i>&rdquo;<footer><strong>&copy; Justus Sturkenboom - '.date('d-m-Y').'</strong></footer></blockquote>';

# ju5tu5
$verhaal = preg_replace('/Justus Sturkenboom/', 'Chris Visser', $verhaal);
$verhaal = preg_replace('/&copy/', 'Copyleft ', $verhaal);

# Stuur de output naar de browser
echo $verhaal;

# geef de HTML code voor het sluiten van de pagina weer
htmlSluiten();
?>