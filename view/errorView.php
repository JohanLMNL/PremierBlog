<?php

    $title = 'Erreur';
    ob_start();

?>  
    
    <section class="d-flex justify-content-center flex-wrap">
            <h1 class='text-center'>OUPS !</h1>
            <p class='text-center'><?= $error ?></p>
    </section>

<?php
    $content = ob_get_clean();
    require('template.php');
?>
   