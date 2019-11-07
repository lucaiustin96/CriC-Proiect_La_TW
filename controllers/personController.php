<?php 
	require 'libs/Controller.php';
	require 'models/PersonModel.php';

	class personController extends Controller
	{
		private $model = null;
		function __construct() {
			parent::__construct(); //super din java
			$this->model = new PersonModel();
		}

		public function index()
		{
			$this->view->render('persoane');
		}

		public function cauta()
		{	
			//echo $_POST['firstname'] . " -> " . $_POST['lastname'];
			$this->view->render('formular1', $this->model->cautaPersoana());
		}

		public function ofera()
		{	
			//echo $_POST['firstname'] . " -> " . $_POST['lastname']. " -> " . $_POST['descriere'];
			$this->model->oferaInformatii(); //foloseste instanta clasei model(salvata intr-un atribut al clasei) si aeleaza metoda oferaInformatii
			//$this->view->render('persoane');
		}
	}
?>