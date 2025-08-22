<?php

class Migration
{
    private $args;
    private $rules;
    private $content;


    public function __construct($args) {
        $this->args = $args;
        $this->rules = require __DIR__ . "/../../rules.php";
        $this->content =  require __DIR__ . "/../base/migrations.php";
    }

    public function up()
    {
        $argName = $this->args[2];
        $path = $this->rules['paths']['migrations'];
        $name = "$path/$argName.php";

        $this->content = str_replace("%name%", $argName, $this->content);

        if (!file_exists($name)) {
            $file = fopen($name, 'w');
            fwrite($file, $this->content);

            echo "\n\033[92mMigration criada com sucesso\n\033[39m\n";
        } else {
            echo "\n\033[92mJá existe um model com este nome.\n\033[39m\n";
        }
    }
}

$migration = new Migration($argv);
$migration->up();