# silvaleal-cli-pdo

Um código feito em php para ajudar os programadores que irão utilizar PDO em suas aplicações.
Atenção, este projeto não é um ORM, e sim apenas um atalho para mexer em um banco de dados, é usado SQL puro em nosso projeto.

## Como usar?
```bash
php silvaleal # Liste os comandos
php silvaleal <category> # Liste apenas os comandos de uma categoria
php silvaleal db:migration # Crie uma migration
php silvaleal db:config # Configure o seu banco de dados
```

## Por qual razão criei esse projeto?

Antes de usar o terminal para configurar o meu banco de dados (método usado no Laravel e CodeIgniter4), eu criava uma classe de Loader para configurar, e com isso, toda vez que o site era visitado ou sofria um refresh (F5), o meu banco era chamado, coisa que eu não recomendo.

## Instalação
```bash
# Passo 1.
    git clone https://github.com/silvaleal/php-cli-pdo
    # Pegue a pasta que você instalou e jogue o que está dentro dela na raiz do seu projeto.

# Passo 2.
    # Acesse a pasta "silvaleal-core" e vá em rules.php, coloque a conexão com seu banco de dados e o caminho que deseja para as migrations
```