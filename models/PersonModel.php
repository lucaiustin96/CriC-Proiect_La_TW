<?php    
	class PersonModel {

		public function cautaPersoana(){
			//return "Bine ai venit " .  $_POST['firstname'] . " -> " . $_POST['lastname'];
			if(isset($_POST['firstname']))
				$prenume = $_POST['firstname'];
			else
				$prenume = null;

			if(isset($_POST['lastname']))
				$nume = $_POST['lastname'];
			else
				$nume = null;

			$url = "https://www.google.org/personfinder/test/api/search?key=43HxMWGBijFaYEr5&q=" . $nume . "+" . $prenume;
			//echo $url;
			$xml = simplexml_load_file($url, null, null, 'pfif', true);
			return $xml;
		}

		public function oferaInformatii(){
			if(isset($_POST['firstname']))
				$prenume = $_POST['firstname'];
			else
				$prenume = null;

			if(isset($_POST['lastname']))
				$nume = $_POST['lastname'];
			else
				$nume = null;

			if(isset($_POST['descriere']))
				$descriere = $_POST['descriere'];
			else
				$descriere = null;


			$url = "https://www.google.org/personfinder/test/api/write?key=43HxMWGBijFaYEr5";
			$xml = $this->generareXML($nume, $prenume, $descriere);
			$headers = array(
				"POST HTTP/1.1",
			    "Content-type: application/xml",
			    "Content-length: " . strlen($xml),
			    "Connection: close",
			);

			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_TIMEOUT, 10);
			//curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$data = curl_exec($ch); 
			if(curl_errno($ch))
			    print curl_error($ch);
			else
			    curl_close($ch);
			header('location: ../person');  //ne redirectioneaza catre pagina person
			return 1;

			//echo  $this->generareXML($nume, $prenume, $descriere);
		}

		private function generareXML($nume, $prenume, $descriere){
			$xml = '<?xml version="1.0" encoding="utf-8"?>
			<pfif:pfif xmlns:pfif="http://zesty.ca/pfif/1.4">
			  <pfif:person>
			    <pfif:person_record_id>
				    testkey.personfinder.google.org/person.'. rand(1000000000, 2000000000) . '		
				    </pfif:person_record_id>
			   
			    <pfif:full_name> ' . $nume . ' ' . $prenume . '</pfif:full_name>
			    <pfif:description> ' . $descriere . ' </pfif:description>
			  </pfif:person>
			</pfif:pfif>';
			return $xml;
		}
	}
?>