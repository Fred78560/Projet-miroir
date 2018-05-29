<?php
	$pourcentageLe = 15;
	$pourcentageA = 21;
	$pourcentageLa = 7;
	$pourcentageM = 10;

	$tLe = " ";
	$tLa = " ";
	$tA = " ";
	$tM = " ";

	$legume = array('tomate','pommeterre','poivronrouge','poivronvert','brocolis','panet','betterave','concombre','poireau','navet','patatedouce','carotte','salade','mache','courgette','FIN');

	$ligne1 = file("C:/Utilisateurs/frederic hermann/Dropbox/JARVIS/alimentation/legume.txt");
	foreach($ligne1 as $ligne_num => $ligne)
	{
		$stockLe = explode(" ",$ligne);
	}
        

	$autre = array('conserve','oeufs','farine','nouille','riz','brioche','gouter','chocolatmorceau','céréale','sirop','eau','pain','charcuterie','cornichon','moutarde','confiture','jusdorange','huiledolive','velourbalsamique','huiledolivecitron','mayonnaise','FIN');

	$ligne2 = file("C:/Utilisateurs/frederic hermann/Dropbox/JARVIS/alimentation/autre.txt");
	foreach($ligne2 as $ligne_num => $ligne)
	{
		$stockA = explode(" ",$ligne);
	}
        

	$laitier = array('fromage','dessert','cremefraiche','chantilly','beurre','fromageblanc','gruillere','FIN');

	$ligne3 = file("C:/Utilisateurs/frederic hermann/Dropbox/JARVIS/alimentation/laitier.txt");
	foreach($ligne3 as $ligne_num => $ligne)
	{
		$stockLa = explode(" ",$ligne);
	}


	$menage = array('produitvaisselle','eponge','sacpoubelle','sopalin','papiertoilette','deo','parfum','cotontige','cire','dentifrice','FIN');

	$ligne4 = file("C:/Utilisateurs/frederic hermann/Dropbox/JARVIS/alimentation/menage.txt");
	foreach($ligne4 as $ligne_num => $ligne)
	{
		$stockM = explode(" ",$ligne);
	}


	for ($i=0; $i<15; $i++)
	{
		if ($legume[$i] != $stockLe[$i])
		{
			$pourcentageLe = $pourcentageLe-1;
		}
	}

	for ($j=0; $j<21; $j++)
	{
		if ($autre[$j] != $stockA[$j])
		{
			$pourcentageA = $pourcentageA-1;
		}
	}

	for ($k=0; $k<7; $k++)
	{
		if ($laitier[$k] != $stockLa[$k])
		{
			$pourcentageLa = $pourcentageLa-1;
		}
	}

	for ($l=0; $l<10; $l++)
	{
		if ($menage[$l] != $stockM[$l])
		{
			$pourcentageM = $pourcentageM-1;
		}
	}


	$result1 = round(($pourcentageLe * 100) / 15);
	if ($result1 <= "100" && $result1 >= "55")
	{
		$tLe = "#679403";
	}
	elseif ($result1 <= "55" && $result1 >= "30")
	{
		$tLe = "#F27020";
	}
	elseif ($result1 <= "30" && $result1 >= "0")
	{
		$tLe = "#EE2727";
	}

	$result2 = round(($pourcentageA * 100) / 21);
	if ($result2 <= "100" && $result2 >= "55")
	{
		$tA = "#679403";
	}
	elseif ($result2 <= "55" && $result2 >= "30")
	{
		$tA = "#F27020";
	}
	elseif ($result2 <= "30" && $result2 >= "0")
	{
		$tA = "#EE2727";
	}

	$result3 = round(($pourcentageLa * 100) / 7);
	if ($result3 <= "100" && $result3 >= "55")
	{
		$tLa = "#679403";
	}
	elseif ($result3 <= "55" && $result3 >= "30")
	{
		$tLa = "#F27020";
	}
	elseif ($result3 <= "30" && $result3 >= "0")
	{
		$tLa = "#EE2727";
	}

	$result4 = round(($pourcentageM * 100) / 10);
	if ($result4 <= "100" && $result4 >= "55")
	{
		$tM = "#679403";
	}
	elseif ($result4 <= "55" && $result4 >= "30")
	{
		$tM = "#F27020";
	}
	elseif ($result4 <= "30" && $result4 >= "0")
	{
		$tM = "#EE2727";
	}

	echo "<HTML><BODY>";
	echo "<table id='tb' border=5 height=50 width=100 style='font-size: 10pt'><tr><td>";
	echo "<table border=0 height=50 width=100 style='font-size: 10pt'><tr>";
	echo "<div id='legume'>";
	echo "<td bgcolor='$tLe'><span><center><h1>LEGUME<br/></h1></center></span></td>";
	echo "</div></div>";
	echo "</tr></table></td></tr></table>";

	echo "<table id='tb' border=5 height=50 width=100 style='font-size: 10pt'><tr><td>";
	echo "<table border=0 height=50 width=100 style='font-size: 10pt'><tr>";
	echo "<div id='laitier'>";
	echo "<td bgcolor='$tLa'><span><center><h1>LAITIER<br/></h1></center></span></td>";
	echo "</div></div>";
	echo "</tr></table></td></tr></table>";

	echo "<table id='tb' border=5 height=50 width=100 style='font-size: 10pt'><tr><td>";
	echo "<table border=0 height=50 width=100 style='font-size: 10pt'><tr>";
	echo "<div id='autre'>";
	echo "<td bgcolor='$tA'><span><center><h1>AUTRE<br/></h1></center></span></td>";
	echo "</div></div>";
	echo "</tr></table></td></tr></table>";

	echo "<table id='tb' border=5 height=50 width=100 style='font-size: 10pt'><tr><td>";
	echo "<table border=0 height=50 width=100 style='font-size: 10pt'><tr>";
	echo "<div id='autre'>";
	echo "<td bgcolor='$tM'><span><center><h1>MENAGE<br/></h1></center></span></td>";
	echo "</div></div>";
	echo "</tr></table></td></tr></table>";

	echo "</BODY></HTML>";
?>
