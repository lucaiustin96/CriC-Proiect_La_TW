<section class = "main-content">
	<div class = "content-wrapper">
		<div class = "site-info">
			<h1>Construit pentru a ajuta persoanele pierdute</h1>

			<p>&nbsp;&nbsp;&nbsp;&nbsp;V-ați gândit vreodată ce ați putea face atunci când noi sau o persoană cunoscută devenim victima unor dezastre naturale: cutremure, inundații, alunecari de teren sau incendii?</p>

			<br>
			<p>&nbsp;&nbsp;&nbsp; Obiectivul nostru este de a transforma neprevăzutul într-un eveniment controlabil în care șansele noastre de supraviețuire să devină maxime.</p>
		</div>
		<?php 
			if(!isset($_SESSION['email'])):
		?>
			<div class = "login">
				<form action="inregistrare/verificalogare" method = "post">

				    <label class = "login-lable" for="email">E-mail sau nume utilizator</label>
				    <input type="text" id="email" name="email-login" placeholder="E-mail sau nume utilizator.." value="">


				    <label class = "login-lable" for="parola">Parola</label>
				    <input type="password" id="parola" name="parola" placeholder="Parola.." value="">

				    <input type="submit" name ="submit" value="Conectează-te">

			    </form>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class = "articles-wrapper">
	<article class = "article1">
		<div class = "content-wrapper">
			
				<div class = "info"><div class = "imagine"><img src="https://media.dcnews.ro/image/201709/w670/cutremur_93658300.jpg" alt="Cutremure">
					</div>
				</div>

				<div class = "info">
					<div class = "text">
						<h3>Cutremure</h3>
						<p>Lorem ipsum dolor sit amet, pro epicuri nominati at, atqui consul tamquam sit ex. Eu est posse delicatissimi. Quem probo facete mel cu, ut pro ullum reprimique. At dicam repudiare mei.No labitur fastidii instructior nec, mei at atqui putant, duo assum nominati et. An tempor vivendo his, vis in ubique neglegentur. Ferri dicam tollit ius te. Sit ne tation ridens doming, id mea nisl aliquid, ad homero instructior pri.
						</p>
					</div>
				</div>
	
				<div class = "info">
					<div class = "text">
						<h3>Cutremure</h3>
						<p>Lorem ipsum dolor sit amet, pro epicuri nominati at, atqui consul tamquam sit ex. Eu est posse delicatissimi. Quem probo facete mel cu, ut pro ullum reprimique. At dicam repudiare mei.No labitur fastidii instructior nec, mei at atqui putant, duo assum nominati et. An tempor vivendo his, vis in ubique neglegentur. Ferri dicam tollit ius te. Sit ne tation ridens doming, id mea nisl aliquid, ad homero instructior pri.
						</p>
					</div>
				</div>
		</div>
	</article>

	<article class = "article2">
		<div class = "content-wrapper">
			<div class = "info">
				<div class = "text">
					<h3>Inundatii</h3>
					<p>Lorem ipsum dolor sit amet, pro epicuri nominati at, atqui consul tamquam sit ex. Eu est posse delicatissimi. Quem probo facete mel cu, ut pro ullum reprimique. At dicam repudiare mei.No labitur fastidii instructior nec, mei at atqui putant, duo assum nominati et. An tempor vivendo his, vis in ubique neglegentur. Ferri dicam tollit ius te. Sit ne tation ridens doming, id mea nisl aliquid, ad homero instructior pri.
					</p>
				</div>
			</div>

			<div class = "info">
				<div class = "imagine"><img src="http://www.capital.ro/uploads/cache/pics/igsu-inundatii-605x.jpg" alt="Inundatii"></div>

			</div>

			<div class = "info">
				<div class = "text">
					<h3>Inundatii</h3>
					<p>Lorem ipsum dolor sit amet, pro epicuri nominati at, atqui consul tamquam sit ex. Eu est posse delicatissimi. Quem probo facete mel cu, ut pro ullum reprimique. At dicam repudiare mei.No labitur fastidii instructior nec, mei at atqui putant, duo assum nominati et. An tempor vivendo his, vis in ubique neglegentur. Ferri dicam tollit ius te. Sit ne tation ridens doming, id mea nisl aliquid, ad homero instructior pri.
					</p>
				</div>
			</div>
		</div>
	</article>

	<article class = "article3">
		<div class = "content-wrapper">
				<div class = "info">
					<div class = "text">
						<h3>Incendii</h3>	
						<p>Lorem ipsum dolor sit amet, pro epicuri nominati at, atqui consul tamquam sit ex. Eu est posse delicatissimi. Quem probo facete mel cu, ut pro ullum reprimique. At dicam repudiare mei.No labitur fastidii instructior nec, mei at atqui putant, duo assum nominati et. An tempor vivendo his, vis in ubique neglegentur. Ferri dicam tollit ius te. Sit ne tation ridens doming, id mea nisl aliquid, ad homero instructior pri.
						</p>
					</div>
				</div>
		
				<div class = "info">
					<div class = "text">
						<h3>Incendii</h3>	
						<p>Lorem ipsum dolor sit amet, pro epicuri nominati at, atqui consul tamquam sit ex. Eu est posse delicatissimi. Quem probo facete mel cu, ut pro ullum reprimique. At dicam repudiare mei.No labitur fastidii instructior nec, mei at atqui putant, duo assum nominati et. An tempor vivendo his, vis in ubique neglegentur. Ferri dicam tollit ius te. Sit ne tation ridens doming, id mea nisl aliquid, ad homero instructior pri.
						</p>
					</div>
				</div>

				<div class = "info">
					<div class = "imagine"><img src="http://maramedia.ro/images/news/sursa-foto-foto-isu-buc-if-stirileprotv-ro.jpg" alt="Incendii"></div>
				</div>

		</div>
	</article>
</section>