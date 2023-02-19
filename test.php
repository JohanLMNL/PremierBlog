<?php
    // Ecrivez le code PHP ici
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <title>ShareFiles - Hébergez gratuitement vos images et en illimité</title>
    </head>
    <body>

        <header>
            <a href="../">
                <span>ShareFiles</span>
            </a>
        </header>

        <section>
            <h1>
                <i class="fas fa-paper-plane"></i>
            </h1>

            <form method="post" action="index.php" enctype="multipart/form-data">
                <p>
                    <label for="image">Sélectionnez votre fichier</label><br>
                    <input type="file" name="image" id="image">
                </p>
                <p id="send">
                    <button type="submit">Envoyer <i class="fas fa-long-arrow-alt-right"></i></button>
                </p>
            </form>
        </section>
        
    </body>
</html>