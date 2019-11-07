<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://localhost/git/CriC/public/css/style.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/git/CriC/public/css/header.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="disparitie, persoane disparute, informatii persoane, cautare persoane, localizare persoane">
		<title>Home | Cric</title>
	</head>
	<body>
		<?php include 'header.php';?>
		<section class = "contact-content">
			<div class= "content-wrapper">
				<?php 
				foreach($values as $value):
				?>
					<div class = "stergeUseri">
				        <div class = "useriRow">
							<?php echo $value[5] . "<br>"; ?>
						</div>
				        <div class = "useributton">
				            <?php echo "<form action='deleteRow' method = 'post'>"; ?>
				                <button name="action" value='<?php echo $value[5] ?>'>
				                    <img src="../public/img/rubbish-bin.svg" alt="Imaginea nu este gasita">
				                </button>
				             <?php echo "</form>"; ?>
				        </div>
				    </div>
				<?php
					endforeach;
				?>
			</div>
		</section>

		<?php include 'footer.php';?>
