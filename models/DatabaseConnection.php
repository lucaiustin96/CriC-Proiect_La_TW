<?php

class DatabaseConnection
{

	function __construct()
	{
		$this->dbConnection = new PDO('mysql:host=localhost;dbname=cric', "root", "");

	}
	//eliminarea injectiilor sql!!!!
	public function insereazaUseri($nume, $prenume, $parola, $email)
	{
		$this->dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$query = $this->dbConnection->prepare("INSERT INTO useri (nume, prenume, parola, tip, email) VALUES (?, ?, ?, 'user', ?)");
        $query->execute(array($nume, $prenume, $parola, $email));
	}

	public function verificaDatele($email, $parola)
	{
		$this->dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$query = $this->dbConnection->prepare("SELECT * FROM useri WHERE email = ? AND parola = ?");
        $query->execute(array($email, $parola));
        $count = $query->rowCount();
        $result = $query->fetch();
        if($count)
			return $result[5];
		return null;
	}

	public function getInfo($email) {
		$this->dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$query = $this->dbConnection->prepare("SELECT * FROM useri WHERE email = ?");
        $query->execute(array($email));
        $count = $query->rowCount();
        $result = $query->fetch();
        if($count)
			return $result;
		return null;
	}

	public function modificaProfil($nume, $prenume, $parola) 
	{
		if(isset($nume) &&$nume != null)
		{
			$query = $this->dbConnection->prepare("UPDATE useri SET nume = ? WHERE email = ?");
      	    $query->execute(array($nume, $_SESSION['email']));
		}

		if(isset($prenume) &&$prenume != null)
		{
			$query = $this->dbConnection->prepare("UPDATE useri SET prenume = ? WHERE email = ?");
      	    $query->execute(array($prenume, $_SESSION['email']));
		}

		
		if(isset($parola) &&$parola != null)
		{
			$query = $this->dbConnection->prepare("UPDATE useri SET parola = ? WHERE email = ?");
      	    $query->execute(array($parola, $_SESSION['email']));
		}
	}
	public function getUseri()
	{
		$this->dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$query = $this->dbConnection->prepare("SELECT * FROM useri");
        $query->execute();
        $count = $query->rowCount();
        $result = $query->fetchAll();
        if($count)
			return $result;
		return null;	
	}

	public function deleteRow()
	{
		echo $_POST['action'];
		$query = $this->dbConnection->prepare("DELETE FROM useri WHERE email = ?");
        $query->execute(array($_POST['action']));
        $count = $query->rowCount();
        $result = $query->fetchAll();
        if($count)
			return $result;
		return null;	
	}

	public function getEmails()
	{
		$query = $this->dbConnection->prepare("SELECT * FROM trimitemail");
        $query->execute();
        $count = $query->rowCount();
        $result = $query->fetchAll();
        if($count)
			return $result;
		return null;
	}

	public function getPhoneNumbers()
	{
		$query = $this->dbConnection->prepare("SELECT * FROM trimitesms");
        $query->execute();
        $count = $query->rowCount();
        $result = $query->fetchAll();
        if($count)
			return $result;
		return null;
	}

	public function getTip()
	{
		$query = $this->dbConnection->prepare("SELECT tip FROM useri where email = ?");
        $query->execute(array($_SESSION['email']));
        $count = $query->rowCount();
        $result = $query->fetchAll();
        if($count)
			return $result[0][0];
		return null;
	}
}
?>