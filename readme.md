# Karbom
[Packagist](https://packagist.org/packages/silvaleal/karbom) | [Wiki](https://github.com/silvaleal/karbom/wiki)

Uma biblioteca PHP projetada para ajudar desenvolvedores que querem usar PDO em suas aplicações.
**Nota**: este projeto não é um ORM, mas apenas um atalho para criar tabelas usando PDO puro.

## Como usar?

```shell
php .\bin\karbom                      # Lista todos os comandos
php .\bin\karbom <categoria>           # Lista os comandos de uma categoria específica
php .\bin\karbom db:migration <nome>   # Cria uma migração
php .\bin\karbom db:load               # Configura o seu banco de dados
```

## Instalação

```shell
# Passo 1: instale no seu projeto
composer require silvaleal/karbom

# Passo 2: configure seu arquivo .env

DATABASE_HOST="localhost"
DATABASE_USER="root"
DATABASE_PASSWORD=""
DATABASE_NAME="karbomTest"

KARBOM_MIGRATIONS="/sql/Migrations/"  # Importante: deve começar e terminar com "/"
```

## Dependências
- PHP 8.1+
- vlucas/phpdotenv
