<?php

class PotoModel
{
	public function inscription() {
		$this->connect = Database::instance();
		$sql = $this->connect->prepare("INSERT INTO user(nom, prenom, email, mdp)
										VALUES(:nom, :prenom, :email, :mdp)");
		$sql->bindValue(':nom', $_POST['form-first-name']);
		$sql->bindValue(':prenom', $_POST['form-last-name']);
		$sql->bindValue(':email', $_POST['form-email']);
		$sql->bindValue(':mdp', password_hash($_POST['password'], PASSWORD_BCRYPT));
		if ($sql->execute()) {
			echo "Bienvenue" . " " . $_POST['form-last-name'] . " " . $_POST['form-first-name'] . " sur PotoOute!";
			return true;
		}
	}

	public function connexion() {
		$this->connect = Database::instance();
		$sql = $this->connect->prepare("SELECT *
										FROM user
										WHERE email = :email");
		$sql->bindValue(':email', $_POST['form-username']);
		if ($sql->execute()) {
			$result = $sql->fetchAll();
			foreach ($result as $row) {
				session_start();
				$_SESSION['email'] = $row['email'];
				$_SESSION['nom'] = $row['nom'];
				$_SESSION['prenom'] = $row['prenom'];
			}
		}
		else {
			echo "Cette adresse email n'existe pas.";
			header('Location: index.php?controller=PotoController&action=accueil');
			return false;
		}
	}
}