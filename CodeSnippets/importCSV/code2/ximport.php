<?php
require_once("../fonctions/connect.php");
require_once("../fonctions/fonctions.php");

$import_art = "import_art";

// Création du répertoire de transfert des fichiers
$repertoire="./fichier/";
if(is_dir($repertoire) ){
} else {
	echo htmlentities("Création du répertoire de transfert.");
	mkdir ($repertoire, 0755);
}

// Définition des variable globales
// Taille maximale de fichier, valeur en bytes
$MAX_SIZE = 5000000;
// Définition des extensions de fichier autorisées
$AUTH_EXT = array(".csv",".CSV", ".txt");

// Fonction permettant de vérifier si l'extension du fichier est autorisée.
function isExtAuthorized($ext){
	global $AUTH_EXT;
	if(in_array($ext, $AUTH_EXT)){
		return true;
	}else{
		return false;
	}
}

	// Nom du fichier choisi
	$nomFichier = $_FILES['import_art']['name'] ;
	// Nom temporaire sur le serveur
	$nomTemporaire = $_FILES['import_art']['tmp_name'] ;
	// Type du fichier choisi
	$typeFichier = $_FILES['import_art']['type'] ;
	// Poids en octets du fichier choisi
	$poidsFichier = $_FILES['import_art']['size'] ;
	// Code de l'erreur si jamais il y en a une
	$codeErreur = $_FILES['import_art']['error'] ;
	// Extension du fichier
	$extension = strrchr($nomFichier, ".");

if(!empty($_FILES['import_art']['name'])){
	// Si le poids du fichier est de 0 bytes, le fichier est invalide (ou le chemin incorrect) => message d'erreur
	// sinon, le script continue.
	if($poidsFichier <> 0){
		// Si la taille du fichier est supérieure a la taille maximum spécifiée => message d'erreur
		if($poidsFichier < $MAX_SIZE){
			// On teste ensuite si le fichier a une extension autorisée
			if(isExtAuthorized($extension)){ 
				// Copie du fichier temporaire dans le dossier de destination
				if(is_uploaded_file($_FILES['import_art']['tmp_name'])){
					// Traitement du nom pour éviter les caractères pouvant poser problème
					$nomFichier = stripslashes($nomFichier);
					$nomFichier = strtr($nomFichier, "!\"#$%&'()*+,/:;<=>?@[\]^`{|}~çâäàéèêëîïìôöòûüùÿ£ ", "-----------_----------------caaaeeeeiiiooouuuy-_");
					copy($_FILES['import_art']['tmp_name'], $repertoire.$nomFichier);
				}else{
					echo "Erreur lors de la copie du fichier";
				}
			}else{
				echo "Les fichiers avec l'extension $extension ne peuvent pas etre transférés !<br>";
			}
		}else{
			$tailleKo = $MAX_SIZE / 1000;
			echo "Vous ne pouvez pas Transférer de fichiers dont la taille est supérieure a : $tailleKo Ko.<br>";
		}		
	}else{
		echo "Le fichier choisi est invalide !<br>";
	}
}else{
	echo "Fichier inexistant";
}

	LireFichier($nomFichier);
	
// Lecture et insertion du fichier
function LireFichier($nomFichier)
{
	//connexion a la bd
	$db = connection();
	$monfichier="./fichier/".$nomFichier;
	
	//taille du fichier
	$contenu = file($monfichier);
	$taille = sizeof($contenu);
	
	//Connaitre le bon fichier
	$lignedeb = $contenu[0];
	$elem = explode(";",$lignedeb);
	if(count($elem)!= 30 ){ 
		echo utf8_encode("Le format de fichier semble incorrect !");
		return false;
	}
	
	$ajout=0;
	$modif=0;
	
for($i=1;$i<$taille;$i++)
	{
		// on lit le fichier
		$buffer = $contenu[$i];

		// on découpe la chaine lue dans un tableau SELON SEPARATEUR
		$liste = explode(";",$buffer);
		$tailleListe = sizeof($liste);
		
		// retraitement des entrée de tableau, on enlève les " 
		for($j=0; $j<$tailleListe;$j++){			
		$liste[$j] = @str_replace("\"","",$liste[$j]);
		$liste[$j] = @addslashes($liste[$j]);
		}
		
		$numArt = $liste[0];
		$artOrdre = $liste[1];
		$noCat = $liste[2];
		$artTitre = $liste[3];
		$artAoc = $liste[4];
		$artDosage = $liste[5];
		$artCeppmeun = $liste[6];
		$artCeppnoir = $liste[7];
		$artCeppchard = $liste[8];
		$artTerroir = $liste[9];
		$artVinification = $liste[10];
		$artAlcool = $liste[11];
		$artOeil = $liste[12];
		$artNez = $liste[13];
		$artBouche = $liste[14];
		$artDegust = $liste[15];
		$artPhrase = $liste[16];
		$artDesc = $liste[17];
		$artCond = $liste[18];
		$artVol = $liste[19];
		$artPoids = $liste[20];
		$artPrix = $liste[21];
		$artPhoto1 = $liste[22];
		$artPhoto2 = $liste[23];
		$artPhoto3 = $liste[24];
		$artPdf = $liste[25];
		$artActif = $liste[26];
		$artVente = $liste[27];
		$artSlide = $liste[28];
		
		// TEST VALEUR CONTENUE DANS LE TABLEAU AVANT TRAITEMENT
		if($numArt!='')
		{
			//test si ENREG EXISTE DEJA OU PAS
			$requete = "SELECT * FROM fr_articles WHERE numart='".$numArt."'";
			$result = mysql_query($requete) or die("Requête $requete erronée");
			$nbre_ligne= mysql_num_rows($result);
			
			//ajout d'un nouvel enregistrement si le numero d'article n'existe pas
			if ($nbre_ligne == 0)
			{
				$dategen = strtotime(date('Y-m-d H:i:s',time())); 
				// insertion BD
				$query = "
						INSERT INTO fr_articles
						SET
						numart = '".htmlspecialchars($numArt)."',
						art_ordre = '".htmlspecialchars($artOrdre)."',
						nocat = '".htmlspecialchars($noCat)."',
						art_titre = '".htmlspecialchars($artTitre)."',
						art_aoc = '".htmlspecialchars($artAoc)."',
						art_dosage = '".htmlspecialchars($artDosage)."',
						art_ceppmeun = '".htmlspecialchars($artCeppmeun)."',
						art_ceppnoir = '".htmlspecialchars($artCeppnoir)."',
						art_ceppchard = '".htmlspecialchars($artCeppchard)."',
						art_terroir = '".htmlspecialchars($artTerroir)."',
						art_vinification = '".htmlspecialchars($artVinification)."',
						art_alcool = '".htmlspecialchars($artAlcool)."',
						art_oeil = '".htmlspecialchars($artOeil)."',
						art_nez = '".htmlspecialchars($artNez)."',
						art_bouche = '".htmlspecialchars($artBouche)."',
						art_degust = '".htmlspecialchars($artDegust)."',
						art_phrase = '".htmlspecialchars($artPhrase)."',
						art_desc = '".htmlspecialchars($artDesc)."',
						art_cond = '".htmlspecialchars($artCond)."',
						art_vol = '".htmlspecialchars($artVol)."',
						art_poids = '".htmlspecialchars($artPoids)."',
						art_prix = '".htmlspecialchars($artPrix)."',
						art_photo1 = '".htmlspecialchars($artPhoto1)."',
						art_photo2 = '".htmlspecialchars($artPhoto2)."',
						art_photo3 = '".htmlspecialchars($artPhoto3)."',
						art_pdf = '".htmlspecialchars($artPdf)."',
						art_actif = '".htmlspecialchars($artActif)."',
						art_vente = '".htmlspecialchars($artVente)."',
						art_slide = '".htmlspecialchars($artSlide)."',
						maj = '".$dategen."';";
				mysql_query($query,$db) or die ("Erreur pendant la requete $query");
				$ajout=$ajout+1;
			}//Fin verif nbre_ligne == 0
			else
			//modification de l'enregistrement si le numero d'article existe
			{
				$dategen = strtotime(date('Y-m-d H:i:s',time())); 
				$requ = "UPDATE fr_articles SET 
						art_ordre = '".htmlspecialchars($artOrdre)."',
						nocat = '".htmlspecialchars($noCat)."',
						art_titre = '".htmlspecialchars($artTitre)."',
						art_aoc = '".htmlspecialchars($artAoc)."',
						art_dosage = '".htmlspecialchars($artDosage)."',
						art_ceppmeun = '".htmlspecialchars($artCeppmeun)."',
						art_ceppnoir = '".htmlspecialchars($artCeppnoir)."',
						art_ceppchard = '".htmlspecialchars($artCeppchard)."',
						art_terroir = '".htmlspecialchars($artTerroir)."',
						art_vinification = '".htmlspecialchars($artVinification)."',
						art_alcool = '".htmlspecialchars($artAlcool)."',
						art_oeil = '".htmlspecialchars($artOeil)."',
						art_nez = '".htmlspecialchars($artNez)."',
						art_bouche = '".htmlspecialchars($artBouche)."',
						art_degust = '".htmlspecialchars($artDegust)."',
						art_phrase = '".htmlspecialchars($artPhrase)."',
						art_desc = '".htmlspecialchars($artDesc)."',
						art_cond = '".htmlspecialchars($artCond)."',
						art_vol = '".htmlspecialchars($artVol)."',
						art_poids = '".htmlspecialchars($artPoids)."',
						art_prix = '".htmlspecialchars($artPrix)."',
						art_photo1 = '".htmlspecialchars($artPhoto1)."',
						art_photo2 = '".htmlspecialchars($artPhoto2)."',
						art_photo3 = '".htmlspecialchars($artPhoto3)."',
						art_pdf = '".htmlspecialchars($artPdf)."',
						art_actif = '".htmlspecialchars($artActif)."',
						art_vente = '".htmlspecialchars($artVente)."',
						art_slide = '".htmlspecialchars($artSlide)."',
						maj = '".$dategen."'		
						WHERE numart='".$numArt."';";
				mysql_query($requ,$db) or die ("Erreur pendant la requete $requ");
				$modif=$modif+1;
			}//Fin du else
		}//Fin  si le nom different de null
	}// Fin du for
	$nbLignes = $taille-1;

	echo "<p><b>".$nbLignes ." lignes traitées.<br /></b></p>";
	echo "<p>";
	echo "- <b>".$ajout."</b> ajoutées<br />";
	echo "- <b>".$modif."</b> modifiées<br />";
	echo"</p>";
	echo"<p>&nbsp;</p>";
}// Fin de la fonction

?>