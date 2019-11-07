<?php 
	class InregistrareModel
	{
		function __construct()
		{
			require 'models/DatabaseConnection.php';
			$this->databaseConnection = new DatabaseConnection();
		}

		public function insereazaDatele()
		{ 
			if(isset($_POST['nume_de_familie']))
				$nume = $_POST['nume_de_familie'];
			else
				$nume = null;

			if(isset($_POST['prenume']))
				$prenume = $_POST['prenume'];
			else
				$prenume = null;

			if(isset($_POST['email']))
				$email = $_POST['email'];
			else
				$email = null;

			if(isset($_POST['parola']))
				$parola = $_POST['parola'];
			else
				$parola = null;

			$this->databaseConnection -> insereazaUseri($nume, $prenume, $parola, $email);
			header('location: ../index.php');
		}

		public function verificaDatele()
		{
				if(isset($_POST['email-login']))
					$email = $_POST['email-login'];
				else
					$email = null;

				if(isset($_POST['parola']))
					$parola = $_POST['parola'];
				else
					$parola = null;

				$emailValue = $this->databaseConnection -> verificaDatele($email, $parola);
				
				if($emailValue) {
					$_SESSION["email"] = $emailValue;
					$_SESSION["parola"] = $parola;
					header('location: ../profil');
				}
				else{
					header('location: ../inregistrare');
				}
		}
	}
?>