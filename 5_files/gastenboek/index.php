<?php
# include de benodigde bestanden (require geeft een fatale fout als het niet lukt)
require('../inc/config.inc.php');
require('../inc/functions.inc.php');
require('../inc/template.inc.php');

# geef de HTML code voor het openen van de pagina weer
htmlOpenen('Gastenboek');

# stel een bestandsnaam in
$gastenboekBestand = 'gastenboek.txt';

# stel een delimiter voor de berichten in
$delimiter = "[:mgb]";

# maak een lege variabele aan voor de inhoud van het bestand
$data = '';

# als het bestand nog niet bestaat
if(!file_exists($gastenboekBestand)){
	# maak en bestand aan en open het voor schrijfmodus
	$file = fopen($gastenboekBestand, 'x');
	# sluit het bestand
	fclose($file);
}

# toon een formulier voor het toevoegen van berichten
echo '
	<div id="gastenboekForm">
	<form action="'.$_SERVER['PHP_SELF'].'" method="post" enctype="multipart/form-data">
		<label for="bericht">Laat een bericht achter:</label><br />
			<textarea name="bericht" id="bericht"></textarea><br />
		<label for="submit"></label>
			<input type="submit" name="submit" id="submit" value="Plaats bericht!" /><br />
	</form>
	</div>
';

# controleer of het formulier verstuurd is
if(isset($_POST['submit']) && !empty($_POST['bericht'])){
	# open het bestand voor schrijven, zet de schrijfkop onderaan
	$file = fopen($gastenboekBestand, 'a-');
	# schrijf het verstuurde bericht weg, strip php en html code en vertaal speciale tekens
	fwrite($file, htmlspecialchars(strip_tags($_POST['bericht'])).$delimiter);
	# sluit het bestand
	fclose($file);
}

# open het bestand voor lezen
$file = fopen($gastenboekBestand, 'r');

# zolang er informatie in het bestand staat
while(!feof($file)){
	# voeg die informatie in chunks van 5000 bytes toe aan de variabele data
	$data .= fgets($file, 5000);
}
#sluit het bestand
fclose($file);

# explode de data op de gebruikte delimiter
$berichtenRij = explode($delimiter, $data);

# verwijder lege berichten
$berichtenRij = array_filter($berichtenRij);

# Optioneel, keer de volgorde van de berichten om
$berichtenRij = array_reverse($berichtenRij);

# loop de array op het scherm
foreach($berichtenRij as $bericht){
	echo '
	<div class="bericht">
		<p>'.nl2br($bericht).'</p>
	</div>
	';
}

# geef de HTML code voor het sluiten van de pagina weer
htmlSluiten();
?>