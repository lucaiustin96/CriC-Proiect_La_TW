<?php 
	require 'libs/Controller.php';

	class profilController extends Controller
	{
		function __construct() {
			parent::__construct();
			require 'models/ProfilModel.php';
			$this->model = new ProfilModel();
		}

		public function index()
		{
			$this->view->render('profil', $this->model->getInfo($_SESSION['email']));
		}

		public function modifica()
		{
			$this->model->modifica();
		}

		public function getUseri()
		{
			
			$this->view->render('afiseazaUseri', $this->model->getUseri());
		}

		public function deleteRow()
		{
			
			$this->model->deleteRow();
		}
	}
?>