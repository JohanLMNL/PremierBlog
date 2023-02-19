<?php

    require_once('model/ArticlesManager.php');
    require_once('model/ProjectManager.php');

    function home() {
        $articleManager = new ArticleManager();
        $requete = $articleManager->getArticles();
        require('view/homeView.php');
    }

    function projects() {
        $projectManager = new ProjectManager();
        $requete = $projectManager->getProject();
        require('view/projectView.php');
    }

    function addArticle() {
        require('view/addArticleView.php');
    }

    function oneArticle() {
        $articleManager = new ArticleManager();
        $requete = $articleManager->getArticles();
        require('view/OneArticleView.php');
    }

    function addNewArticle($title, $content, $description, $author, $image) {
        $articleManager = new ArticleManager();
        $result = $articleManager->postArticle($title, $content, $description, $author, $image);

        if($result === false ) {
            throw new Exception("Impossible d'ajouter un article pour le moment");
        }

        else{
            header("Location: index.php?page=newarticle&success=true");
            exit();
        }
    }