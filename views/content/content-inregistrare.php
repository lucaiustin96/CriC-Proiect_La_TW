<div class = "autentificare-content">
	<div class= "content-wrapper">
		<div class = "inregistrare">
			<h3>Crează un cont nou</h3>
			<form action="inregistrare/trimitedate" method = "post">
				<div class = "test">
			    	<label class = "nume" for="fname">Nume de familie</label>
			    	<input type="text" id="fname" name="nume_de_familie" placeholder="Nume de familie..">
			    </div>

			    <div class = "test">
			    	<label class = "nume" for="lname">Prenume</label>
			    	<input type="text" id="lname" name="prenume" placeholder="Prenume..">
		    	</div>
			    <label class = "login-lable" for="email1">E-mail</label>
			    <input type="text" id="email1" name="email" placeholder="E-mail..">


			    <label class = "login-lable" for="parola1">Parola</label>
			    <input type="password" id="parola1" name="parola" placeholder="Parola..">
			    <input type="submit" value="Înregistrează-te">
		    </form>
		</div>


		<div class = "login">
			<form action="inregistrare/verificalogare" method = "post">

			    <label class = "login-lable" for="email">E-mail sau nume utilizator</label>
			    <input type="text" id="email" name="email-login" placeholder="E-mail sau nume utilizator.." value="">


			    <label class = "login-lable" for="parola">Parola</label>
			    <input type="password" id="parola" name="parola" placeholder="Parola.." value="">

			    <input type="submit" name ="submit" value="Conectează-te">

		    </form>
		</div>

	</div>
</div>