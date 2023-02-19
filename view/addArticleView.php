<?php

    $title = "Ajouter un Article";




    ob_start();
?>

    <section class="d-flex justify-content-center flex-column">

    <?php if(isset($_GET['success'])){ ?>

        <div class="alert alert-success text-center" role="alert">
            Votre article à bien été publié !
        </div>

    
    <?php } ?>
        <form class="d-flex justify-content-center flex-column align-items-center" method='post' action='index.php?page=newarticle'>

            <p>
                <label class='text-center' for='title'>Titre de l'article</label></br>
                <input type='text' name='title' id='title'>
            </p>
            <p>
                <label class='text-center' for='content'>Article</label></br>
                <textarea name='content' id='content'></textarea>
            </p>
            <input type='submit' value="publier l'article">
        <form>
        
    </section>

<?php  
    $content = ob_get_clean();
            require('template.php');
?>