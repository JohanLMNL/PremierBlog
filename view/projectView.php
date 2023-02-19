<?php

    $title = 'Mes Projets';
    ob_start();
?>
   

   <section>

        <?php
            while($project = $requete->fetch()) {
        ?>

        <div class='card' style="width: 18rem;"> 
            <div class='card-body'>
                <h2 class='card-title'><?=$project['tilte']?></h2>
                <p class='card-text'><?=$project['content']?></p>
            </div>
        </div>

        <?php
            }
        ?>
    </section>

<?php
    $content = ob_get_clean();
    require('template.php');
?>
    