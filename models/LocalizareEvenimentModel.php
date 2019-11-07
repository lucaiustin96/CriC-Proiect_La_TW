<?php 
	//require 'libs/Controller.php';

	class LocalizareEvenimentModel
	{
		private $client = null;
		private $service = null;

		function __construct() 
		{
			$this -> init();
		}

		private function init() 
		{
			require_once 'libs/google-api-php-client/vendor/autoload.php';
			$path = "libs/cric-alert.json";
			putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $path);
			$this->client = new Google_Client();
			$this->client->useApplicationDefaultCredentials();
			$this->client->addScope("https://www.googleapis.com/auth/fusiontables");
			$this->service = new Google_Service_Fusiontables($this->client);

			if(isset($_SESSION['email']))
				$this->username = "'" . $_SESSION['email'] . "'";
			else
				$this->username = null;
		}

		public function execute() 
		{
			if(strip_tags($_POST['eveniment']) == 'cutremur')
				$this -> sendCuntremur();
			if(strip_tags($_POST['eveniment']) == 'inundatii')
				$this -> sendInundatii();
			if(strip_tags($_POST['eveniment']) == 'alunecari')
				$this -> sendAlunecari();
			if(strip_tags($_POST['eveniment']) == 'incendiu')
				$this -> sendIncendiu();
			header('location: ../localizare');	
		}

		public function getAuthorRows() {

			$selectQuery = "SELECT * FROM 1SyIWwV6mJkCIOo2E7WmLnkovGKXGjNuquOlqJ5Sj WHERE Author = " . $this->username;
			$resultCutremure = $this->service->query->sql($selectQuery);
			if($resultCutremure->rows == NULL) 
				$resultCutremure = "Nu ai adaugat cutremure";

			$selectQuery = "SELECT * FROM 1COTvG5cs2qflhBlM4mx4IQjbOXOHdcGnlpHqdtdA WHERE Author = " . $this->username;
			$resultInundatii = $this->service->query->sql($selectQuery);
			if($resultInundatii->rows == NULL) 
				$resultInundatii = "Nu ai adaugat inundatii";

			$selectQuery = "SELECT * FROM 18-4Ie9cCZKQlicbFMWWoPmAQe5OT8uDH6sfetI4E WHERE Author = " . $this->username;
			$resultAlunecari = $this->service->query->sql($selectQuery);
			if($resultAlunecari->rows == NULL) 
				$resultAlunecari = "Nu ai adaugat alunecari de teren";

			$selectQuery = "SELECT * FROM 1Tl0ADZeREAasuHvHKmJTtQ5WBHsD_jZ4OljAWoEQ WHERE Author = " . $this->username;
			$resultIncendii = $this->service->query->sql($selectQuery);
			if($resultIncendii->rows == NULL) 
				$resultIncendii = "Nu ai adaugat incendii";

			$result = array(
				"cutremure" => $resultCutremure,
				"inundatii" => $resultInundatii,
				"alunecari" => $resultAlunecari,
				"incendii" => $resultIncendii
			);
			return $result;
		}

		private function getId($tableName) {
			$selectQuery = "SELECT ID FROM " . $tableName;
			$result = $this->service->query->sql($selectQuery);
			$maxim = -1;
			foreach ($result['rows'] as $row) {
			 	foreach ($row as $key => $value) {
			 		if(intval($value) > $maxim)
			 			$maxim = intval($value);
				}   
			}
			return $maxim;
		}

		private function sendCuntremur()
		{
			$id = $this -> getID('1SyIWwV6mJkCIOo2E7WmLnkovGKXGjNuquOlqJ5Sj');
			$id = $id + 1;

			$descriere = htmlspecialchars($_POST['descriere'], ENT_QUOTES, 'UTF-8');
			$localizare = 	htmlspecialchars($_POST['localizare'], ENT_QUOTES, 'UTF-8');

			$selectQuery = "insert into 1SyIWwV6mJkCIOo2E7WmLnkovGKXGjNuquOlqJ5Sj (ID, Text, Location, Date, Author) values (" .$id . ", '" . $descriere ."', '".$localizare . "', '".date("Y/m/d")."', ".$this->username.")";
			$result = $this->service->query->sql($selectQuery);
		}

		private function sendInundatii()
		{
			$id = $this -> getID('1COTvG5cs2qflhBlM4mx4IQjbOXOHdcGnlpHqdtdA');
			$id = $id + 1;

			$descriere = htmlspecialchars($_POST['descriere'], ENT_QUOTES, 'UTF-8');
			$localizare = 	htmlspecialchars($_POST['localizare'], ENT_QUOTES, 'UTF-8');

			$selectQuery = "insert into 1COTvG5cs2qflhBlM4mx4IQjbOXOHdcGnlpHqdtdA (ID, Text, Location, Date, Author) values (" .$id . ", '" . $descriere ."', '".$localizare . "', '".date("Y/m/d")."', ".$this->username.")";
			$result = $this->service->query->sql($selectQuery);
		}

		private function sendAlunecari()
		{
			$id = $this -> getID('18-4Ie9cCZKQlicbFMWWoPmAQe5OT8uDH6sfetI4E');
			$id = $id + 1;

			$descriere = htmlspecialchars($_POST['descriere'], ENT_QUOTES, 'UTF-8');
			$localizare = 	htmlspecialchars($_POST['localizare'], ENT_QUOTES, 'UTF-8');
			
			$selectQuery = "insert into 18-4Ie9cCZKQlicbFMWWoPmAQe5OT8uDH6sfetI4E (ID, Text, Location, Date, Author) values (" .$id . ", '" . $descriere ."', '".$localizare . "', '".date("Y/m/d")."', ".$this->username.")";
			$result = $this->service->query->sql($selectQuery);
		}

		private function sendIncendiu()
		{
			$id = $this -> getID('1Tl0ADZeREAasuHvHKmJTtQ5WBHsD_jZ4OljAWoEQ');
			$id = $id + 1;

			$descriere = htmlspecialchars($_POST['descriere'], ENT_QUOTES, 'UTF-8');
			$localizare = 	htmlspecialchars($_POST['localizare'], ENT_QUOTES, 'UTF-8');
			$selectQuery = "insert into 1Tl0ADZeREAasuHvHKmJTtQ5WBHsD_jZ4OljAWoEQ (ID, Text, Location, Date, Author) values (" .$id . ", '" . $descriere ."', '".$localizare . "', '".date("Y/m/d")."', ".$this->username.")";
			$result = $this->service->query->sql($selectQuery);
		}

		public function deleteCutremurRow() 
		{

			$descriere = htmlspecialchars($_POST['descriere'], ENT_QUOTES, 'UTF-8');
			$localizare = 	htmlspecialchars($_POST['localizare'], ENT_QUOTES, 'UTF-8');
			$selectQuery = "DELETE FROM 1SyIWwV6mJkCIOo2E7WmLnkovGKXGjNuquOlqJ5Sj WHERE ID = " .  $_POST['action'];
			echo $selectQuery;
			$result = $this->service->query->sql($selectQuery);	
			header('location: ../localizare');
		}

		public function deleteInundatiiRow() 
		{
			$selectQuery = "DELETE FROM 1COTvG5cs2qflhBlM4mx4IQjbOXOHdcGnlpHqdtdA WHERE ID = " .  $_POST['action'];
			echo $selectQuery;
			$result = $this->service->query->sql($selectQuery);	
			header('location: ../localizare');
		}

		public function deleteAlunecariRow() 
		{
			$selectQuery = "DELETE FROM 18-4Ie9cCZKQlicbFMWWoPmAQe5OT8uDH6sfetI4E WHERE ID = " .  $_POST['action'];
			echo $selectQuery;
			$result = $this->service->query->sql($selectQuery);	
			header('location: ../localizare');
		}

		public function deleteIncendiiRow() 
		{
			$selectQuery = "DELETE FROM 1Tl0ADZeREAasuHvHKmJTtQ5WBHsD_jZ4OljAWoEQ WHERE ID = " .  $_POST['action'];
			echo $selectQuery;
			$result = $this->service->query->sql($selectQuery);	
			header('location: ../localizare');
		}
	}
?>