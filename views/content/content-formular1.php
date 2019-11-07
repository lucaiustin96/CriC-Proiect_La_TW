<section  class= "formular1-content">
    <div class= "content-wrapper">
        <div class = "stanga">
            <?php 
                if(count($values) > 0) //dca biectul are atribute
                {
                    foreach ($values as $person):
            ?>
                    <div class = "nume-persoana">
                        <?php echo $person->full_name; ?>
                    </div>
                        <?php echo $person->author_name; ?>
                        <br>
                         <?php echo $person->entry_date; ?>
                         <br>
                          <?php echo $person->description ; ?>

            <?php
                    endforeach; 
                }
                else
                {
                    echo "Persoana nu este in baza de date";
                }
            ?>
        </div>
        <div class = "dreapta">
         <?php include 'content-cauta.php' ?>
        </div>
    </div>
</div>

</section>
