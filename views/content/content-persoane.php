
<section  class= "persoane-content">
    <div class= "content-wrapper">
           
        <?php include 'content-cauta.php' ?>

        <div id="finded">
            <div class = "persoane-info">Ofera informatii</div>
            <form action="person/ofera" method = "post">

                <label >Prenume</label>
                <input type="text" class="fname" name="firstname" placeholder="His/Her name...">

                <label >Nume</label>
                <input type="text" class="lname" name="lastname" placeholder="His/Her last name...">

                <label class="lname">Descriere</label>
                <textarea   name="descriere" rows="4" cols="59">
                    Adauga o descriere 
                </textarea>

                <input type="submit" value="Oferiti mai multe informatii">
            </form>
        </div>

    </div>
</section>

