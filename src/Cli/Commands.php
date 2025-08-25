<?php

namespace Karbom\Cli;

class Commands
{
    public static function list()
    {
        return [
            "db" => [
                "db:load" => "Configure o seu banco de dados com um comando.",
                "db:migration <name>" => "Crie um migration."
            ]
        ];
    }
}