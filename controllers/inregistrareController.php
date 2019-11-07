<?php 
	require 'libs/Controller.php'; //include pagina contrller.php pentru a include codul in care se afla clasa Contrller

	class inregistrareController extends Controller
	{

		function __construct()
		{
			parent::__construct(); //apelam constructorul clasei parinte pentru ca din moment ce am declarat un constructor, constructorul parintelui este suprascris
			require 'models/InregistrareModel.php';
			$this->model = new InregistrareModel();
		}

		public function index()
		{
			if(!isset($_SESSION['email'])) {
				$this->view->render('inregistrare');
			}
			else {
				$this->view->render('404');
			}
		}

		public function trimitedate()
		{
			
			$this->model->insereazaDatele();
		}

		public function verificalogare()
		{
			$this->view->render('/inregistrare', $this->model->verificaDatele());
			
		}
	}
?>