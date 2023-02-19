<?php

require_once('ConnectManager.php');
class ProjectManager extends ConnectManager{

    public function getProject(){
       
        $db = $this -> connection();
        $requete = $db->query('SELECT * FROM projects');

        return $requete;
    }
}