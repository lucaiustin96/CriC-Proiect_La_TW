<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php 
	require 'libs/Bootstrap.php';     //Spune php-ului ca nu poate rula scriptul pana nu include pagina
	$bootstrap = new Bootstrap();	  
	$bootstrap -> init(); //
?>