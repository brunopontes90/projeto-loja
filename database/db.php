<?php

require_once 'config.php';
$config = new Config();

class BancoDeDados{
    
    public function connect(){
        try {
            $banco = new PDO($this->config->dsn, $this->config->username, $this->config->pass);
        } catch (PDOException $erro) {
            echo 'SGBD indisponivel: ' . $erro->getMessage();
            exit();
        }
    }
}