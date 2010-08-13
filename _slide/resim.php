<?php
header("Content-Type: text/html; charset=ISO-8859-9");
function resim_no(){
	$tikler = array();
	for ($i = 1; $i < 46; $i++)
		//array_push($tikler,
		echo '<li><a href="images/' . strval($i) . '.jpg">
		<img src="images/thumbs/t' . strval($i) . '.jpg" title="image slide denemesi" longdesc="resim '.strval($i).' icin yorum yazicam">
		</a></li>';
	//echo implode($tikler,"\n");
}

?>

