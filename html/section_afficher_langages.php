
<?php
	$affichage = "<h2><i>Mes connaissances techniques</i></h2>";
	
	$affichage .= "<ul>";
		$affichage .= "<li>";
			$affichage .= "Langages informatiques :<br />";
			$affichage .= "<ul type='circle'>";
				$affichage .= "<li>Langages de programmation : C, C++</li>";
				$affichage .= "<li>Langage de gestion de bases de données : SQL</li>";
				$affichage .= "<li>Langages Web : HTML, CSS, PHP</li>";
				$affichage .= "<li>Langages en cours d’apprentissage : JAVA, HTML-5, XML, JavaScript, Ajax, jQuery</li>";
			$affichage .= "</ul>";
		$affichage .= "</li>";
		$affichage .= "<br />";
		
		$affichage .= "<li>";
			$affichage .= "Maitrise bureautique :<br />";
			$affichage .= "<ul type='circle'>";
				$affichage .= "<li>Word, Excel, PowerPoint, Access</li>";
			$affichage .= "</ul>";
		$affichage .= "</li>";
	$affichage .= "</ul>";

	echo $affichage;
?>


