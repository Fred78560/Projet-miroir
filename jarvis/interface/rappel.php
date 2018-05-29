<?php
	$fichier=file("C:/SARAH/JARVIS/rappel.txt");
	$total = count($fichier);
	
	echo "<b><div class='pos'><center>NOTES<br/>________________________________________</center>";
	for($i = 0; $i < $total; $i++) 
	{
		echo $fichier[$i]."<br/>";
	}
	echo "</div></b>";
?>
