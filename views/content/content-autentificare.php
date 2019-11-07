<div class = "autentificare-content">
	<div class= "content-wrapper">
		<div class = "inregistrare">
			<h3>Crează un cont nou</h3>
			<form action="/action_page.php">
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
			    <input type="text" id="parola1" name="parola" placeholder="Parola..">


			    <label class = "login-lable" for="telefon">Telefon</label>
			    <input type="text" id="telefon" name="telefon" placeholder="Parola..">


			    <label for="tara">Țara</label>
    				<select id="tara" name="tara">
				      <option value="anglia">Anglia</option>
				      <option value="austria">Austria</option>
				      <option value="australia">Australia</option>
				      <option value="belgia">Belgia</option>
				      <option value="bulgaria">bulgaria</option>
				      <option value="canada">Canada</option>
				      <option value="cehia">Cehia</option>
				      <option value="cipru">Cipru</option>
				      <option value="danemarca">Danemarca</option>
				      <option value="elvetia">Elvetia</option>
				      <option value="finlanda">Finlanda</option>
				      <option value="franta">Franța</option>
				      <option value="germania">Germania</option>
				      <option value="grecia">Grecia</option>
				      <option value="italia">Italia</option>
				      <option value="japonia">Japonia</option>
				      <option value="monaco">Monaco</option>
				      <option value="muntenegru">Muntenegru</option>
				      <option value="moldova">Moldova</option>
				      <option value="norvegia">Norvegia</option>
				      <option value="polonia">Polonia</option>
				      <option value="portugalia">Portugalia</option>
				      <option value="romania">România</option>
				      <option value="rusia">Rusia</option>
				      <option value="serbia">Serbia</option>
				      <option value="sua">SUA</option>
				      <option value="slovenia">Slovenia</option>
				      <option value="scotia">Scoția</option>
				      <option value="spania">Spania</option>
				      <option value="turcia">Turcia</option>

				    </select>

				    <span class="sex-lable" data-type="radio" data-name="gender_wrapper" id="sex">
				    	<span class="masculin">
				    		<input type="radio" name="sex" value="1" id="feminin">
				    		<label class="sex" for="feminin">Feminin</label>
				    	</span>
					    <span class="feminin">
					    	<input type="radio" name="sex" value="2" id="masculin">
					    	<label class="sex" for="masculin">Masculin</label>
					    </span></span>
			    <input type="submit" value="Înregistrează-te">
		    </form>
		</div>


		<div class = "login">
			<form action="/action_page.php">

			    <label class = "login-lable" for="email">E-mail sau nume utilizator</label>
			    <input type="text" id="email" name="emai1l" placeholder="E-mail sau nume utilizator..">


			    <label class = "login-lable" for="parola">Parola</label>
			    <input type="text" id="parola" name="parola" placeholder="Parola..">

			    <input type="submit" value="Conectează-te">
		    </form>
		</div>

	</div>
</div>