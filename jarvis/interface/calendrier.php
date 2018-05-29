<?php
	$fic3 = 'C:/SARAH/JARVIS/calendrier.txt';
	$ligne3 = file($fic3);
	foreach($ligne3 as $ligne_num => $ligne)
	{
		$rdv = explode("-",$ligne);
	}

	setlocale (LC_TIME, 'fr_FR.utf8','fra'); 

	$today = "";
	$tomorrow = "";
	$t = "";

	echo "<HTML><BODY>";
	echo "<meta http-equiv='content-type' content='text/html; charset=utf-8'/>";
	echo "<b><div class='place'><center>CALENDRIER<br/>________________________________________</center>";
	for ($i=0; $i<sizeof($rdv); $i++)
	{
		if (strftime("%#d %m %Y") == $rdv[$i])
		{
			$t = $i+1;
			$today = $rdv[$t];
		}
	}
	if (empty($today))
	{
		echo "Aujourd'hui<br/>► Aucun événement<br/>";
	}
	else
	{
		echo "Aujourd'hui<br/>► $today<br/>";
	}

	for ($i=0; $i<sizeof($rdv); $i++)
	{
		if (strftime("%#d %m %Y",time()+86400) == $rdv[$i])
		{
			$t = $i+1;
			$tomorrow = $rdv[$t];
		}
	} 
	if (empty($tomorrow))
	{
		echo "<br/>".strftime("%a %d %b",time()+86400)."<br/>► Aucun événement<br/></div>";
	}
	else
	{
		echo "<br/>".strftime("%a %d %b",time()+86400)."<br/>► $tomorrow<br/></div>";
	}
	echo "</div></BODY></HTML>";
?>
