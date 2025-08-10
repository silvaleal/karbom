<?php

class Database
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $pdo;

    public function __construct($host, $user, $password, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    public function prepare()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
        } catch (\Throwable $th) {
            $pdo = new PDO("mysql:host=$this->host", $this->user, $this->password);

            $pdo->exec("CREATE DATABASE $this->database");
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
        }
        return $this->pdo;
    }

    public function connect() {
        $this->prepare();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->pdo;
    }
}