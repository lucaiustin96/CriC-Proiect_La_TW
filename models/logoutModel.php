<?php
	session_start(); 
	class LogoutModel
	{
		function __construct() 
		{
			session_destroy();
			header('location: index');
		}
	}
?>