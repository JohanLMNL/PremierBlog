<?php

    $title = "Accueuil";




    ob_start();
?>
    <section class='m-3 d-flex justify-content-between flex-wrap border border-primary p-2 rounded'>
        <div>
            <input type="checkbox" class="btn-check" id="code" autocomplete="off">
            <label class="btn btn-outline-primary" for="code">Code</label>
            <input type="checkbox" class="btn-check" id="lifestyle" autocomplete="off">
            <label class="btn btn-outline-primary" for="lifestyle">Lifestyle</label>
            <input type="checkbox" class="btn-check" id="project" autocomplete="off">
            <label class="btn btn-outline-primary" for="project">Projets</label>
        </div>
        <div>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Recherche" aria-label="Username" aria-describedby="basic-addon1">
                <input type="submit" class="form-control bg-primary text-light">
            </div>
        </div>
    </section>

    <section class="d-flex justify-content-center flex-wrap">
        
        <?php
            while($articles = $requete->fetch()) {
        ?>
        <div class="card m-5" style="width: 50rem;">
        <h4 class="card-header"><?=$articles['title']?></h4>
        <img class="card-img-top" src='<?=$articles['image']?>' alt="Card image cap">
            <div class=card-body>
                <span class="badge rounded-pill bg-primary"><?=$articles['categorie']?></span>
                <p class="card-text"><?=$articles['description']?></p>
                <p class="card-text color-secondary fw-light fst-italic">Auteur : <?=$articles['author']?></p>
                
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

   