
<?php

class PotoController
{
	public function accueil() {
		$ver = new Verification();
		if ($ver->verifInscription() == true) {
			$class = new ModelVerif();
			if ($class->verifEmail() == true) {
				$requete = new PotoModel();
				$requete->inscription() == true;
			}
		}
		include('View/accueuil.php');
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
			else {
				include("View/accueuil.php");
			}
		}
		else {
			include("View/accueuil.php");
		}
	}



	public function recherche() {
		$ver = new PotoModel();
		$ver->recherche();
	}

	public function attendre() {
		$ver = new PotoModel();
		$ver->attendre();
	}
}

include("Verification.php");
include("Model/ModelVerif.php");
include("Model/PotoModel.php");