<?php

class Verification 
{
	public function verifInscription() {
		if (!empty($_POST['pseudo']) && !empty($_POST['form-email']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
			if ($_POST['password'] != $_POST['password2']) {
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