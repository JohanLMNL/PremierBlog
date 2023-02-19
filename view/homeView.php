<?php

    $title = "Accueuil";




    ob_start();
?>

    <section class="d-flex justify-content-center flex-wrap">
        
        <?php
            while($articles = $requete->fetch()) {
        ?>
        <div class="card m-5 p-2" style="width: 50rem;">
            <div class=card-body>
                <h2 class="card-title"><?=$articles['title']?></h2>
                <p class="card-text"><?=$articles['content']?></p>
                <a href="/?page=article&id=<?=$articles['id']?>" class="btn btn-primary">Lire l'article</a>
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

   