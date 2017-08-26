<?php

class PotoModel
{
	public function inscription() {
		$this->connect = Database::instance();
		$sql = $this->connect->prepare("INSERT INTO user(pseudo, email, mdp)
										VALUES(:pseudo, :email, :mdp)");
		$sql->bindValue(':pseudo', $_POST['pseudo']);
		$sql->bindValue(':email', $_POST['form-email']);
		$sql->bindValue(':mdp', password_hash($_POST['password'], PASSWORD_BCRYPT));
		if ($sql->execute()) {
			echo "Bienvenue" . " " . $_POST['pseudo'] . " sur PotoOute!";
			return true;
		}
	}

	public function connexion() {
		$this->connect = Database::instance();
		$sql = $this->connect->prepare("SELECT *
										FROM user
										WHERE pseudo = :pseudo");
		$sql->bindValue(':pseudo', $_POST['form-username']);
		if ($sql->execute()) {
			$result = $sql->fetchAll();
			foreach ($result as $row) {
				session_start();
				$_SESSION['id'] = $row['id'];
				$_SESSION['pseudo'] = $row['pseudo'];
			}
		}
	}

	public function recherche() {
		$this->connect = Database::instance();
		if (isset($_GET['motclef'])) {
			$motclef = $_GET['motclef'];
			$sql = $this->connect->prepare("SELECT *
										FROM user
										WHERE pseudo LIKE :pseudo");
			$sql->bindValue(':pseudo', '%' . $_GET['motclef'] . '%');
			if ($sql->execute()) {
				$result = $sql->fetchAll();			
				foreach ($result as $row) {
					$_SESSION['id2'] = $row['id'];
					$_SESSION['pseudo2'] = $row['pseudo']; 
					?> <p class="pseudoRecherche"><a href="#"> <?php echo $_SESSION['pseudo2']; ?> </a></p> <?php
				}
			}
		}
	}
}