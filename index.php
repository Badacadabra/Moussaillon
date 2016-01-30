<?php

$squelette = "ui/page/squelette.html";
$css_large = "ui/css/large.css";
$css_medium = "ui/css/medium.css";
$css_small = "ui/css/small.css";
$titre = "";
$script = "";
$contenu = "";

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "accueil";
}

switch ($page) {
	case "zythologie":
	$titre = "Les anecdotes du zythologue pour briller en société | Mouss'aillon";
	$contenu = file_get_contents("informations/zythologie.frg.html");
	break;
	
	case "catalogue":
	$titre = "Le nec plus ultra de la bière dans notre catalogue | Mouss'aillon";
	$contenu = file_get_contents("informations/catalogue.frg.html");
	break;
	
	case "brasseries":
	$titre = "Les meilleures brasseries de Belgique sont ici | Mouss'aillon";
	$script = file_get_contents("ui/fragments/scripts-brasseries.frg.html");
	$contenu = file_get_contents("informations/brasseries.frg.html");
	break;
	
	case "evenements":
	$titre = "La bonne bière belge : star de bien des événements | Mouss'aillon";
	$script = file_get_contents("ui/fragments/scripts-evenements.frg.html");
	$contenu = file_get_contents("informations/evenements.frg.html");
	break;
	
	case "contact":
	$titre = "Formulaire de contact | Mouss'aillon";
	$script = file_get_contents("ui/fragments/scripts-contact.frg.html");
	$contenu = file_get_contents("informations/contact.frg.html");
	break;
	
	case "news-1":
	$titre = "Trop de mousse dans la bière ? Voici la solution ! | Mouss'aillon";
	$contenu = file_get_contents("informations/news-1.frg.html");
	break;
	
	case "news-2":
	$titre = "La bière ne ferait pas prendre de ventre | Mouss'aillon";
	$contenu = file_get_contents("informations/news-2.frg.html");
	break;
	
	case "news-3":
	$titre = "Boire une bière dans un bar peut être une bonne action | Mouss'aillon";
	$contenu = file_get_contents("informations/news-3.frg.html");
	break;
	
	case "brasserie":
	$titre = "Val-Dieu : une abbaye de caractère | Brasseries | Mouss'aillon";
	$contenu = file_get_contents("informations/brasserie.frg.html");
	break;
	
	case "biere":
	$titre = "Orval : une bière trappiste de dégustation | Catalogue | Mouss'aillon";
	$contenu = file_get_contents("informations/biere.frg.html");
	break;
	
	case "accueil":
	$titre = "Mouss'aillon : le site qui va vous faire mousser au pays de la bière !";
	$script = file_get_contents("ui/fragments/scripts-index.frg.html");
	$contenu = file_get_contents("informations/index.frg.html");
	break;
	
	default:
	$titre = "Oups ! Page non trouvée | Mouss'aillon";
	$contenu = file_get_contents("informations/erreur.frg.html");
	break;
}

ob_start();
	require_once($squelette);
	$html = ob_get_contents();
ob_end_clean();

echo $html;

?>
