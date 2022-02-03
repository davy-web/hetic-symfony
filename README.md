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

# Terminal - Arrêter site
symfony serve:stop

# Terminal - Création symfony
symfony new hetic-symfony-leboncoin
composer require annotations
composer require templates
composer require symfony/asset
composer require symfony/maker-bundle --dev
composer require symfony/orm-pack
composer require orm-fixtures --dev
composer require security
composer require profiler --dev
composer require debug
symfony console make:docker:database

# Terminal - Création base de donnée
symfony console make:user
symfony console make:auth

symfony console make:entity
symfony console make:migration
symfony console doctrine:migrations:migrate
symfony console doctrine:fixtures:load

# Shell mysql
mysql -p
use main

# Dossiers
project/src/
project/templates/
public/
