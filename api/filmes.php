<?php 

require_once 'conexao.php';

class Films extends Con {

    // Função responsável por trazer todos os dados do banco.
    public function getFilms() {

        $sql = "SELECT nome FROM filmes";
        $query = $this->getConnection()->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        return $result;
    }

    // Função responsável por trazer dados específicos do banco.
    public function postFilms($name) {

        $sql = "SELECT `nome` FROM filmes WHERE nome LIKE '%$name%'";
        $query = $this->getConnection()->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        return $result;
    }

}