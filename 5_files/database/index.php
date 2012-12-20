<?php

require_once('../inc/config.inc.php');
require_once('../inc/functions.inc.php');
require_once('../inc/template.inc.php');

htmlOpenen('Mijn eerste database script');

$link = dbConnect();

$result = $link->query("SELECT * FROM gastenboek");

while($bericht = $result->fetch_object()){

	echo '
		<article>
			<p>'.$bericht->bericht.'</p>
		</article>
	';
}

htmlSluiten();

?>