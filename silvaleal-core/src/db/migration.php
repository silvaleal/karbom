<?php 

$argName = $argv[2];
$rules = require __DIR__."/../../rules.php";
$path = $rules['paths']['migrations'];
$name = "$path/$argName.php";
$content = require __DIR__."/../base/migrations.php";

$content = str_replace("%name%", $argName, $content);

if (!file_exists($name)) {
    $file = fopen($name, 'w');
    fwrite($file, $content);

    return "Migration criada com sucesso";
} else {
    return "Já existe um model com este nome.";
}
