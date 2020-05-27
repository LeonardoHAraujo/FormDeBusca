<?php

class Con {

    // Função responsável por comunicar com o banco de dados.
    protected function getConnection() {
        try {
            $host = "mysql:host=127.0.0.1; dbname=netflix; charset=utf8";
            return $cn = new PDO($host, 'root', '123456');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}