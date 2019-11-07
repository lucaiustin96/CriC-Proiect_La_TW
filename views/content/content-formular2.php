<section  class= "formular2-content">
	<div class= "content-wrapper">
		<div id="section1"><h2>Despre cine aveti informatii</h2>
            <form>


                <input type="radio" id="contactChoice1" name="contact" value="As vrea sa adaug o inregistrare noua ">
                <label for="contactChoice1">As vrea sa adaug o inregistrare noua</label><br>

                <input type="radio" id="contactChoice2" name="contact" value="As vrea sa completez o inregistrare ">
                <label for="contactChoice2">As vrea sa completez o inregistrare</label><br>
            </form>
		</div>

		<br>

		<div id="section2"><h2>Informatii identificate</h2>
			<form>

				<label for="form2first">First name</label>
                <input id = "form2first" type="text"  name="firstname" placeholder="His/Her name...">

                <label for="form2last">Last name</label>
                <input id = "form2last" type="text"  name="lastname" placeholder="His/Her last name...">

			</form>

			<hr>

			<form>
                <h2>Mai multe informatii pentru a identifica persoana</h2>
				<label for="form2first2">Alternate first name</label>
                <input id = "form2first2" type="text"  name="firstname" placeholder="Other name...">

                <label for="form2last2">Alternate last name</label>
                <input id = "form2last2" type="text"  name="lastname" placeholder="Other last name...">

                <label for="gender">Gender</label>
                <input type="text" id="gender" name="gender" placeholder="Femeie/Barbat...">

                <label for="age">Varsta</label>
                <input type="number" id="age" name="age" >

			</form>

		</div>
    </div>
</section>

<script>
function myFunction3() {
    var y = document.getElementById("choice1");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}
</script>
