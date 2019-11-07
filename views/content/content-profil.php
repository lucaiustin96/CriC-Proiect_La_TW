<?php echo $_SESSION['email'] . " ". $_SESSION['parola']; ?>
<div class = "profil-content">
	<div class= "content-wrapper">
		<div class = "numesiprenume">
			<?php echo $values[1] . " " . $values[2]; ?>
		</div>

		<div class = "username">
			<?php echo "Username: " . $values[5]; ?>
		</div>

		<div class = "tipUser">
			<?php echo "Tipul: " . $values[4]; ?>
		</div>

		<div class = "profilform">
			<form action="profil/modifica" method = "post">
				<div class = "test">
			    	<label class = "nume" for="fname">Nume de familie</label>
			    	<input type="text" id="fname" name="nume_de_familie" placeholder="Nume de familie..">
			    </div>

			    <div class = "test">
			    	<label class = "nume" for="lname">Prenume</label>
			    	<input type="text" id="lname" name="prenume" placeholder="Prenume..">
		    	</div>

			    <label class = "login-lable" for="parola1">Parola</label>
			    <input type="password" id="parola1" name="parola" placeholder="Parola..">
			    <input type="submit" value="Modifica Info">
		    </form>
		    <?php 
			if($values[4] == "admin"):
			?>
			<form action="profil/getUseri" method = "post">
			    <input type="submit" value="Sterge Useri">
		    </form>


		    <form action="trimite" method = "post">
			    <input type="submit" value="TrimiteAlerta">
		    </form>
		<?php 
			endif;
		?>
		</div>
	</div>
</div>
