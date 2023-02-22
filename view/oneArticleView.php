<?php

    ob_start();
?>
   

   <section>
        <?php
            while($article = $requete->fetch()) {
                if($_GET['id'] == $article['id']){
                
        ?>
                <h2><?=$article['title']?></h2>
                <img src='<?=$article['image']?>' alt="une image">
                <p><?=$article['description']?></p>
                <p><?=$article['content']?></p>
                <p><?=$article['author']?></p>
                <p><?=$article['date']?></p>

        <?php
            $title = $article['title'];
            }}
            
        ?>

    </section>

<?php
    $content = ob_get_clean();
    require('template.php');
?>