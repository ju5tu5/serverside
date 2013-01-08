<?php

# Public: Echo de HTML code voor het openen van de pagina
#
# $titel	- Een tekst die tussen de <title> en </title> tags wordt geplaatst
#
# Examples:
#
#	htmlOpenen('pagina titel');
#	# => geeft onderstaande html weer
function htmlOpenen($titel){
	# Geef de HTML openen code weer
	echo '<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>'.$titel.'</title>
	<link href="/style/style_normal.css" rel="Stylesheet" type="text/css" media="all" />
</head>
<body>	
	<div id="wrapper">
	';
}

function toonMenu($current_item){

	echo '
		<nav>
			<ul>
				<li'.($current_item=="een"?' class="active"':'').'><a href="een.html"><span>Een</span></a></li>
				<li'.($current_item=="twee"?' class="active"':'').'><a href="twee.html"><span>Twee</span></a></li>
				<li'.($current_item=="drie"?' class="active"':'').'><a href="drie.html"><span>Drie</span></a></li>
				<li'.($current_item=="vier"?' class="active"':'').'><a href="vier.html"><span>Vier</span></a></li>
				<li'.($current_item=="vijf"?' class="active"':'').'><a href="vijf.html"><span>Vijf</span></a></li>
			</ul>
		</nav>
	';
}

# Public: Echo de HTML code voor het sluiten van de pagina
#
# Examples:
#
#	htmlSluiten();
#	# => geeft onderstaande html weer
function htmlSluiten(){
	# Geef de HTML voor het afsluiten van de pagina
	echo '
	</div>
</body>
</html>
	';
}


?>