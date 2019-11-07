<?php 
	require 'libs/Controller.php';
	
	class localizareController extends Controller
	{
		private $model = null;

		function __construct() {
			parent::__construct();
			require 'models/LocalizareEvenimentModel.php';
			$this->model = new LocalizareEvenimentModel();
		}

		public function index()
		{
			if(isset($_SESSION['email']))
				$this->view->render('localizare', $this->model->getAuthorRows());
			else
				$this->view->render('404');
		}

		public function run()
		{
			$this->model->execute();
		}

		public function deleteCutremurRow()
		{
			$this->model->deleteCutremurRow();
		}

		public function deleteInundatiiRow()
		{
			$this->model->deleteInundatiiRow();
		}	

		public function deleteAlunecariRow()
		{
			$this->model->deleteAlunecariRow();
		}	

		public function deleteIncendiiRow()
		{
			$this->model->deleteIncendiiRow();
		}				
	}
?>