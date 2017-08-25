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
		$sql = $this->connect->prepare("SELECT email
										FROM user
										WHERE email = :email");
		$sql->bindValue(':email', $_POST['form-username']);
		if ($sql->execute()) {
			$result = $sql->fetch();
			if ($result[0] == $_POST['form-username']) {
				return true;
			}
			else {
				return false;
			}
		}
	}
}

include("Database.php");