# hetic-symfony-leboncoin

# Pré-requis
PHP 7.4
Composer
Symfony
Docker
Docker-compose

# Terminal - Ouvrir site
docker-compose up -d
symfony serve -d

# Terminal - Création symfony
symfony new hetic-symfony-leboncoin
composer require annotations
composer require templates
composer require symfony/maker-bundle --dev
composer require orm
composer require security
composer require profiler --dev
composer require debug
symfony console make:docker:database

# Terminal - Création base de donnée
symfony console make:user
symfony console make:entity
symfony console make:migration
symfony console doctrine:migrations:migrate

# Dossiers
project/src/Controller/
project/templates/
