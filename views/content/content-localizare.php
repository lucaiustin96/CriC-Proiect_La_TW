<section class = "localizare-content">
	<div class= "content-wrapper">

        <div class = "lista-evenimente">
                <div class = "localizare-label">Evenimentele adaugate de tine</div>
                <div class = "localizare-label">Cutremure:</div>
                <?php 
                    if(is_string($values['cutremure']))
                    {
                        echo '<div class = "tot">';
                            echo $values['cutremure'];
                        echo '</div>';
                    }
                    else
                        foreach ($values['cutremure']['rows'] as $row):
                ?>
                <div class = "tot">
                    <div class = "eveniment-style">
                        <ul>
                        <?php
                            echo '<li>' . $row[1] . '</li>';
                            echo '<li>' .$row[2] . " | " . $row[4] .'</li>';
                            echo '<li>' .$row[3] . '</li>';
                        ?>
                        </ul>
                    </div>
                    <div class = "eveniment-delete">
                        <?php echo "<form action='localizare/deleteCutremurRow' method = 'post'>"; ?>
                            <button name="action" value='<?php echo $row[0]; ?>'>
                                <img src="public/img/rubbish-bin.svg" alt="Kiwi standing on oval">
                            </button>
                         <?php echo "</form>"; ?>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>

                <div class = "localizare-label">Inundatii:</div>
                <?php
                    if(is_string($values['inundatii']))
                    {
                        echo '<div class = "tot">';
                            echo $values['inundatii'];
                        echo '</div>';
                    }
                    else 
                        foreach ($values['inundatii']['rows'] as $row):
                ?>
                <div class = "tot">
                    <div class = "eveniment-style">
                       <ul>
                        <?php
                            echo '<li>' . $row[1] . '</li>';
                            echo '<li>' .$row[3] . " | " . $row[4] .'</li>';
                            echo '<li>' .$row[2] . '</li>';
                        ?>
                        </ul>
                    </div>
                    <div class = "eveniment-delete">
                        <?php echo "<form action='localizare/deleteInundatiiRow' method = 'post'>"; ?>
                            <button name="action" value='<?php echo $row[0]; ?>'>
                                <img src="public/img/rubbish-bin.svg" alt="Kiwi standing on oval">
                            </button>
                         <?php echo "</form>"; ?>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>

                <div class = "localizare-label">Alunecari de teren:</div>
                <?php 
                    if(is_string($values['alunecari']))
                    {
                        echo '<div class = "tot">';
                            echo $values['alunecari'];
                        echo '</div>';
                    }
                    else 
                    foreach ($values['alunecari']['rows'] as $row):
                ?>
                <div class = "tot">
                    <div class = "eveniment-style">
                        <ul>
                        <?php
                            echo '<li>' . $row[1] . '</li>';
                            echo '<li>' .$row[3] . " | " . $row[4] .'</li>';
                            echo '<li>' .$row[2] . '</li>';
                        ?>
                        </ul>
                    </div>
                    <div class = "eveniment-delete">
                        <?php echo "<form action='localizare/deleteAlunecariRow' method = 'post'>"; ?>
                            <button name="action" value='<?php echo $row[0]; ?>'>
                                <img src="public/img/rubbish-bin.svg" alt="Kiwi standing on oval">
                            </button>
                         <?php echo "</form>"; ?>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>

                <div class = "localizare-label">Incendii:</div>
                <?php
                    if(is_string($values['incendii']))
                    {
                        echo '<div class = "tot">';
                            echo $values['incendii'];
                        echo '</div>';
                    }
                    else 
                        foreach ($values['incendii']['rows'] as $row):
                ?>
                <div class = "tot">
                    <div class = "eveniment-style">
                        <ul>
                        <?php
                            echo '<li>' . $row[1] . '</li>';
                            echo '<li>' .$row[3] . " | " . $row[4] .'</li>';
                            echo '<li>' .$row[2] . '</li>';
                        ?>
                        </ul>
                    </div>
                    <div class = "eveniment-delete">
                        <?php echo "<form action='localizare/deleteIncendiiRow' method = 'post'>"; ?>
                            <button name="action" value='<?php echo $row[0]; ?>'>
                                <img src="public/img/rubbish-bin.svg" alt="Kiwi standing on oval">
                            </button>
                         <?php echo "</form>"; ?>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
        </div>

		<div class = "formular-localizare">

            <form action="localizare/run" method="post">
                <div class = "localizare-label">Tipul evenimentului</div>
                <select id = "eveniment" name="eveniment" onchange="loadEvent()">
                  <option value="cutremur">Cutremur</option>
                  <option value="inundatii">Inundatii</option>
                  <option value="alunecari">Alunecari de teren</option>
                  <option value="incendiu">Incendiu</option>
                </select>
                <div id = "optiune-selectata">
                    <?php include('content-optiuni/content-cutremur.php'); ?>
                    <div class = "localizare-label">Locul in care s-a produs</div>
                </div>
            </form>

        </div>
	</div>
    <div class = "test1"></div>
</section>