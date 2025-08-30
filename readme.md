# Karbom

Uma biblioteca PHP projetada para ajudar desenvolvedores que querem usar PDO em suas aplicações.
**Nota**: este projeto não é um ORM, mas apenas um atalho para criar tabelas usando PDO puro.

## Por que eu criei este projeto?

Antes de usar o terminal para configurar meu banco de dados (um método usado no Laravel e CodeIgniter4), eu costumava criar uma classe Loader para gerenciá-lo. Com essa abordagem, toda vez que o site era acessado ou recarregado (F5), meu banco de dados era chamado, o que eu não recomendo.

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

# Padrão de uso do Karbom
DATABASE_HOST="localhost"
DATABASE_USER="root"
DATABASE_PASSWORD=""
DATABASE_NAME="karbomTest"

KARBOM_MIGRATIONS="/sql/Migrations/"  # Importante: deve começar e terminar com "/"
```
