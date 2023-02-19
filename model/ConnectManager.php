<?php

class ConnectManager{
    protected function connection(){
        try {
            $db = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '');
        } catch (Exception $e) {
            throw new Exception('Erreur : '.$e->getMessage());
        }

        return $db;
    }
}