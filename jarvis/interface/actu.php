<?php
$fichier = 'http://www.lefigaro.fr/rss/figaro_flash-actu.xml';
$dom = new DOMDocument();
if (!$dom->load($fichier)) {
    die('Impossible de charger le fichier XML');
}



$itemList = $dom->getElementsByTagName('item');
echo "<H1>IL".$itemList->length." articles dans le flux RSS" ;
echo '<br />'."\n";
foreach ($itemList as $item) {

    
    $date = $item->getElementsByTagName('pubDate');
	if($date->length > 0) {
	echo $date->item(0)->nodeValue;
	
	}
	echo "\n";
	
	$titre = $item->getElementsByTagName('title');
    if ($titre->length > 0) {
        echo $titre->item(0)->nodeValue;
    } 
	
	else {
        echo '(sans titre)';
    }
    
    echo '<br />'."\n";

}

?>