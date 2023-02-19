<?php

    $title = "Ajouter un Article";

    ob_start();
?>
    <section class="d-flex justify-content-center flex-column">

    <?php if(isset($_GET['success']) && $_GET['success'] == true){ ?>

            <div class="alert alert-success text-center" role="alert">
                 Votre article à bien été publié !
            </div>
    <?php } ?>
    
        <?php if(isset($_GET['success']) && $_GET['success'] == false){ ?>

            <div class="alert alert-danger text-center" role="alert">
                Vous devez remplir tous les champs...
            </div>    
    <?php } ?>

        <form class="d-flex justify-content-center flex-column align-items-center" method='post' action='/?page=newarticle' enctype="multipart/form-data">

            <p>
                <label class='text-center' for='title'>Titre de l'article</label></br>
                <input type='text' name='title' id='title'>
            </p>

            <p>
                <label class='text-center' for='image'>Image</label></br>
                <input type="file" name="image" id="image">
            </p>

            <p>
                <label class='text-center' for='description'>Description</label></br>
                <textarea name='description' id='description'></textarea>
            </p>

            <p>
                <label class='text-center' for='content'>Article</label></br>
                <textarea name='content' id='content'></textarea>
            </p>
            <p>
                <label class='text-center' for='author'>Auteur</label></br>
                <input type='text' name='author' id='author'>
            </p>


            <input type='submit' value="publier l'article">
        <form>
        
    </section>

<?php  
    $content = ob_get_clean();
            require('template.php');
?>