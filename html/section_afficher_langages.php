
<?php
	$affichage = "<h2><i>Connaissances techniques</i></h2>";
	
	$affichage .= "<ul>";
		$affichage .= "<li>";
			$affichage .= "Travaux manuels :<br />";
			$affichage .= "<ul type='circle'>";
				$affichage .= "<li>Poterie</li>";
				$affichage .= "<li>Decoupage de papier</li>";
				$affichage .= "<li>Modelisation</li>";
				$affichage .= "<li>sculpture</li>";
			$affichage .= "</ul>";
		$affichage .= "</li>";
		$affichage .= "<br />";
		
		$affichage .= "<li>";
			$affichage .= "Maitrises diverses<br />";
			$affichage .= "<ul type='circle'>";
				$affichage .= "<li>Je sais lire et ecrire</li>";
				$affichage .= "<li>Je parle couramment le serbo croate</li>";
			$affichage .= "</ul>";
		$affichage .= "</li>";
	$affichage .= "</ul>";

	echo $affichage;
?>


