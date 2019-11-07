
	<header id = "header">
		<div class = "wrapper">
			<div class = "logo">Cric Alert</div>
			<div id = "menu-icon" onclick="myFunction()">
				<div class = "icon-line"></div>
				<div class = "icon-line"></div>
				<div class = "icon-line"></div>
			</div>
			<nav id = "menu">
				<ul>
					<li><a href="index">Home</a></li>
					<li><a href="map">Harta</a></li>
					<li><a href="person">Persoane disparute</a></li>
					<?php 
						if(isset($_SESSION['email'])){
							echo '<li><a href="localizare">Localizare Eveniment</a></li>';
							echo '<li><a href="profil">Profil</a></li>';
							echo '<li class = "autentificare"><a href="logout">Logout</a></li>';
						}
						else
							echo '<li class = "autentificare"><a href="inregistrare">Inregistrare</a></li>';
					?>
				</ul>
			</nav>
		</div>
	</header>