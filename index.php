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
            //VERIFICATIONS FORMULAIRE
            //Tous les champs sont-ils remplis ?
            if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['description']) && !empty($_POST['author']) && !empty($_POST['categorie'])){
                // Est-ce qu'il y a une image ?
                if(isset($_FILES['image']) && $_FILES['image']['error'] === 0){
                    //L'image est elle trop lourde ?
                    if($_FILES['image']['size'] <= 3000000){

                        $informationImage = pathinfo($_FILES['image']['name']);
                        $extensionImage = $informationImage['extension'];
                        $extensionsArray = ['png', 'gif', 'jpg', 'jpeg'];

                        if(in_array($extensionImage, $extensionsArray)) {

                            $newImageName = time().rand().rand().'.'.$extensionImage;
                            $imagePath = '/public/uploads/'.$newImageName;
                            move_uploaded_file($_FILES['image']['tmp_name'], 'public/uploads/'.$newImageName);
                            addNewArticle(htmlspecialchars($_POST['title']),htmlspecialchars($_POST['content']),htmlspecialchars($_POST['description']),htmlspecialchars($_POST['author']),$imagePath,htmlspecialchars($_POST['categorie']));
                        }
                    }
               }    
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


