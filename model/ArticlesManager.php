<?php

require_once('ConnectManager.php');


class ArticleManager extends ConnectManager{

    public function getArticles(){
    
        $db = $this->connection();
        $requete = $db->query('SELECT * FROM articles');

        return $requete;
    }

    public function postArticle($title, $content, $description, $author, $image, $categorie) {
        $db = $this->connection();
        $requete = $db->prepare('INSERT INTO articles(title, content, description, author, image, categorie) VALUES (?,?,?,?,?,?)');
        $result = $requete->execute([$title, $content, $description, $author, $image, $categorie]);

        return $result;
    }

}