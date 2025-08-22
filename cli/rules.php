<?php 

## Nota do desenvolvedor
#
# As regras são importantes para a ferramenta funcionar, é aqui que você irá configurar seu banco de dados e as pastas do meu projeto

return [
    "mysql"=>[
        "dbHost"=>'localhost',
        "dbUser"=>'root',
        "dbPassword"=>'',
        "dbName"=>"cli" # Caso não exista, irá criar automaticamente.
    ],
    "paths" => [
        "migrations"=>__DIR__."/../app/Migrations/",
    ]
];