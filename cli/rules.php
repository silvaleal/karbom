<?php 

return [
    "mysql"=>[
        "dbHost"=>'localhost',
        "dbUser"=>'root',
        "dbPassword"=>'',
        "dbName"=>"cli" # Coloque o nome da tabela que você for usar.
    ],
    "paths" => [
        "migrations"=>__DIR__."/../app/Migrations/",
    ]
];