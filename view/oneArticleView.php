<?php

    ob_start();
?>
   

   <section>
        <?php
            while($article = $requete->fetch()) {
                if($_GET['id'] == $article['id']){
                
        ?>
                <h2><?=$article['title']?></h2>
                <p><?=$article['title']?></p>

        <?php
            $title = $article['title'];
            }}
            
        ?>

    </section>

<?php
    $content = ob_get_clean();
    require('template.php');
?>