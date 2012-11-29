<?php

function echoHtmlHeader (){
		echo '<!DOCTYPE html>
<html>
<head>
	<title>Dit is een test!</title>
	<link href="" />
	<meta />
	
</head>
<body>
	
<div id="wrapper">';
}

function echoMenu(){
	echo '
	<header>
		<nav>
			<ul>
				<li><a href=""><span>Een</span></a></li>
				<li><a href=""><span>Twee</span></a></li>
				<li><a href=""><span>Drie</span></a></li>
				<li><a href=""><span>Vier</span></a></li>
				<li><a href=""><span>Vijf</span></a></li>
			</ul>
		</nav>
	</header>
	';
}

function echoFooter(){
	echo '
	<footer>
		<p>Copyleft 2012, all wrongs reversed.</p>
	</footer>

</div>

</body>
</html>
	';
}

?>