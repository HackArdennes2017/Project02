
<?php

class PotoController
{
	public function accueil() {
		include('View/accueuil.php');
		$ver = new Verification();
		if ($ver->verifInscription() == true) {
			$class = new ModelVerif();
			if ($class->verifEmail() == true) {
				$requete = new PotoModel();
				$requete->inscription() == true;
			}
		}
	}

	public function connexion() {
		$ver = new Verification();
		if ($ver->verifConnexion() == true) {
			$class = new ModelVerif();
			if ($class->verifEmailCo() == true) {
				$requete = new PotoModel();
				$requete->connexion();
				include("View/Outay.php");
			}
		}
	}
}

include("Verification.php");
include("Model/ModelVerif.php");
include("Model/PotoModel.php");