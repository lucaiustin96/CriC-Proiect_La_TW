<?php 
	class ProfilModel
	{
		function __construct()
		{
			require 'models/DatabaseConnection.php';
			$this->databaseConnection = new DatabaseConnection();
		}

		public function getInfo($email)
		{
			return $this->databaseConnection->getInfo($email);	
		}

		public function modifica()
		{
			if(isset($_POST['nume_de_familie']))
				$nume = $_POST['nume_de_familie'];
			else
				$nume = null;

			if(isset($_POST['prenume']))
				$prenume = $_POST['prenume'];
			else
				$prenume = null;

			if(isset($_POST['parola']))
				$parola = $_POST['parola'];
			else
				$parola = null;
			$this->databaseConnection->modificaProfil($nume, $prenume, $parola);
			header('location: ../profil');
		}

		public function getUseri()
		{
			return $this->databaseConnection->getUseri();	
		}

		public function deleteRow()
		{
			 $this->databaseConnection->deleteRow();	
			 header('location: ../profil');
		}
	}

?>