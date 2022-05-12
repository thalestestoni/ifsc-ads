<?php

class DbConnection {
    private $dbConnection;

    function __construct()
    {
        $this->dbConnection = new PDO(
            'mysql:host=localhost;dbname=sistema_faleconosco', 'root', ''
        );
    }

    function getInstance() {
        return $this->dbConnection;
    }
}