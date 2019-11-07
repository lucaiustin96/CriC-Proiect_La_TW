<?php 
	require 'libs/Controller.php';

	class logoutController extends Controller
	{
		function __construct() {
			parent::__construct();
			require 'models/LogoutModel.php';
		}

		public function index()
		{
			$this->model = new LogoutModel();
		}
	}
?>