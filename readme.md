# Karbom

[Packagist](https://packagist.org/packages/silvaleal/karbom) | [Wiki (pt\_BR)](https://github.com/silvaleal/karbom/wiki/Portuguese) | [Wiki (EN)](https://github.com/silvaleal/karbom/wiki/English)

A PHP library designed to help developers who want to use **PDO** in their applications.
**Note**: this project is **not an ORM**, but simply a shortcut for creating tables using plain PDO.

## How to use?

```shell
php .\bin\karbom                      # Lists all commands
php .\bin\karbom <category>           # Lists commands from a specific category
php .\bin\karbom db:migration <name>  # Creates a migration
php .\bin\karbom db:load              # Sets up your database
```

## Installation

```shell
# Step 1: install in your project
composer require silvaleal/karbom

# Step 2: configure your .env file

DATABASE_HOST="localhost"
DATABASE_USER="root"
DATABASE_PASSWORD=""
DATABASE_NAME="karbomTest"

KARBOM_MIGRATIONS="/sql/Migrations/"  # Important: must start and end with "/"
```

## Dependencies

* PHP 8.2+
* vlucas/phpdotenv

Quer que eu adapte esse texto para ficar mais no **estilo das libs famosas do GitHub**, com seções tipo *Features*, *Contributing* e *License*?
