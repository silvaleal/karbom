<?php

require __DIR__ . "/../../../app/Database.php";

class Config
{
    private $rules;

    public function __construct()
    {
        $rules = require __DIR__ . "/../../rules.php";
        $this->rules = $rules['mysql'];
    }

    public function up()
    {
        echo "\n\033[92mConfigurando...\033[39m\n";

        $pdo = new Database(
            $this->rules['dbHost'],
            $this->rules['dbUser'],
            $this->rules['dbPassword'],
            $this->rules['dbName']
        );
        $pdo = $pdo->connect();
        $migrations = scandir(__DIR__ . "/../../../app/Migrations");

        foreach ($migrations as $file) {
            if (str_contains($file, ".php")) {
                echo "\033[90mCarregando: $file\n\033[39m";
                $fileContent = require __DIR__ . "/../../../app/Migrations/" . $file;

                foreach ($fileContent as $content) {
                    $stmt = $pdo->prepare($content);
                    $stmt->execute();
                }
            }
        }

        echo "\n\033[92mBanco de dados configurado\033[39m\n";
    }
}

$config = new Config();
$config->up();