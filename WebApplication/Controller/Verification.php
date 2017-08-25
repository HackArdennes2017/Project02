<?php

class Verification 
{
	public function verifInscription() {
		if (!empty($_POST['form-first-name']) && !empty($_POST['form-last-name']) && !empty($_POST['form-email']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
			$convertion = intval($_POST['form-first-name']);
			$convertion2 = intval($_POST['form-last-name']);
			if ($convertion != 0 || $_POST['form-first-name'] == "0") {
				echo "Ce nom ne peut etre utilisé";
				return false;
			}
			else if ($convertion2 != 0 || $_POST['form-last-name'] == "0") {
				echo "Ce prenom ne peut etre utilise";
				return false;
			}
			else if ($_POST['password'] != $_POST['password2']) {
				echo "Vos mots de passe ne sont pas identiques";
				return false;
			}
			else {
				return true;
			}
		}
	}

	public function verifConnexion() {
		if (!empty($_POST['form-username']) && !empty($_POST['form-password'])) {
			return true;
		}
		else {
			return false;
		}
	}
}