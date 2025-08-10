<?php 

require __DIR__."/../../build/Database.php";

echo "\033[92mConfigurando banco de dados\033[39m\n";

$rules = require __DIR__ . "/../../rules.php";
$rules = $rules['mysql'];

$pdo = new Database($rules['dbHost'], $rules['dbUser'], $rules['dbPassword'], $rules['dbName']);
$pdo = $pdo->connect();

$resul = scandir(__DIR__."/../../../app/Migrations");

foreach ($resul as $file) {
    if (str_contains($file,".php")) {
        echo " \033[90mCarregando: $file\n";
        $fileContent = require __DIR__."/../../../app/Migrations/".$file;

        foreach ($fileContent as $content) {
            $stmt = $pdo->prepare($content);
            $stmt->execute();

        }
    }

}

return "\n\033[92mBanco de dados configurado\033[39m\n";