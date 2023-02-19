<?php

require('controller/controller.php');

try {
    if(isset($_GET['page'])) {

        if($_GET['page'] == 'home'){
            home();
        }

        else if($_GET['page'] == 'projects'){
            projects();
        }

        else if($_GET['page'] == 'newarticle'){
            
            if(!empty($_POST['title']) && !empty($_POST['content'])){
                addNewArticle(htmlspecialchars($_POST['title']),htmlspecialchars($_POST['content']));
            }

            else{
            addArticle();
            }
        }

        else if($_GET['page'] == 'article'){
            oneArticle();
        }
        
        else {
            throw new Exception("Cette page n'éxiste pas ou a été supprimée.");
        }

        } else {home();}

} 

catch(Exception $e) {

    $error = $e->getMessage();
    require('view/errorView.php');
    
}


