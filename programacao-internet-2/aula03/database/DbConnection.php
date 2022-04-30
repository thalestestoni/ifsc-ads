<?php

class DbConnection {
    private $dbConnection;

    function __construct()
    {
        $this->dbConnection = new PDO(
            'mysql:host=localhost;dbname=estante', 'root', ''
        );
    }

    function getInstance()
    {
        return $this->dbConnection;
    }
}