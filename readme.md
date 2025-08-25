# silvaleal-cli-pdo

Um código feito em php para ajudar os programadores que irão utilizar PDO em suas aplicações.
Atenção, este projeto não é um ORM, e sim apenas um atalho para mexer em um banco de dados, é usado SQL puro em nosso projeto.

## Como usar?
```bash
php silvaleal # Liste os comandos
php silvaleal <category> # Liste apenas os comandos de uma categoria
php silvaleal db:migration <name> # Crie uma migration
php silvaleal db:config # Configure o seu banco de dados
```

## Por qual razão criei esse projeto?

Antes de usar o terminal para configurar o meu banco de dados (método usado no Laravel e CodeIgniter4), eu criava uma classe de Loader para configurar, e com isso, toda vez que o site era visitado ou sofria um refresh (F5), o meu banco era chamado, coisa que eu não recomendo.

## Instalação
```bash

# X passo, configure seu .env

# Padrão de uso do Karbom
DATABASE_HOST="localhost"
DATABASE_USER="root"
DATABASE_PASSWORD=""
DATABASE_NAME="karbomTest"

KARBOM_MIGRATIONS="/sql/Migrations/"

```