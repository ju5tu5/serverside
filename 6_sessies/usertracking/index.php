<?php
# include de benodigde bestanden (require geeft fatale fout als het niet lukt)
require('../inc/config.inc.php');
require('../inc/functions.inc.php');
require('../inc/template.inc.php');

# geef de HTML code voor het openen van de pagina weer
htmlOpenen('User Tracking met Sessies');

# houd het klikpad van de gebruiker bij
#saveClickPath();

if(!isset($_SESSION['step'])){
	$_SESSION['step'] = 0;
}

# Tel 1 op bij de stappenteller in de sessie array
$_SESSION['step']++;

# Connectie maken met de database
$link = dbConnect();
$link->query("INSERT INTO clickpath (sessionID, step, requesturl) VALUES ('".session_id()."', '".$_SESSION['step']."', '".$_SERVER['REQUEST_URI']."');");
dbClose($link);


# Toon de inhoud van de sessie array
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

# geef de HTML code voor het sluiten van de pagina weer
htmlSluiten();
?>
