<?php

class ModelVerif
{
	public function verifEmail() {
		$this->connect = Database::instance();
		$sql = $this->connect->prepare("SELECT email
										FROM user
										WHERE email = :email");
		$sql->bindValue(':email', $_POST['form-email']);
		if ($sql->execute()) {
			$result = $sql->fetch();
			if ($result[0] == $_POST['form-email']) {
				echo "Cette email existe deja.";
				return false;
			}
			else {
				return true;
			}
		}
	}

	public function verifEmailCo() {
		$this->connect = Database::instance();
		$sql = $this->connect->prepare("SELECT pseudo, mdp
										FROM user
										WHERE pseudo = :pseudo");
		$sql->bindValue(':pseudo', $_POST['form-username']);
		if ($sql->execute()) {
			$result = $sql->fetchAll();
			foreach ($result as $row) {
				if ($row['pseudo'] == $_POST['form-username'] && password_verify($_POST['form-password'], $row['mdp'])) {
					return true;
				}
				else {
					include('View/accueuil.php');
					echo "Adresse email ou mot de passe invalide";
					return false;
				}
			}
		}
	}
}

include("Database.php");