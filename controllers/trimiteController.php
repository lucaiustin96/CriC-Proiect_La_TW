<?php 
	require 'libs/Controller.php';

	class trimiteController extends Controller
	{

		function __construct() {
			parent::__construct();
			require 'models/TrimiteModel.php';
			$this->model = new TrimiteModel();
		}

		public function index()
		{
			if($this->model->getTip() == "admin")
				$this->view->render('trimite');
			else
				$this->view->render('404');
		}

		public function trimiteMail()
		{
			$this->model->trimite();
			///$this->view->render('trimite');
		}


	}
?>