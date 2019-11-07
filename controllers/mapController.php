<?php 
	require 'libs/Controller.php';

	class mapController extends Controller
	{
		public function index()
		{
			$this->view->render('map');
		}
	}
?>