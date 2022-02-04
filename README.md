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
composer require symfony/runtime
symfony console doctrine:migrations:migrate
symfony console doctrine:fixtures:load

# Terminal - Arrêter site
symfony serve:stop

# Connexion
Email : chendavyweb@gmail.com
Password : password






# Terminal - Création symfony
symfony new hetic-symfony-leboncoin
composer require annotations
composer require templates
composer require symfony/asset
composer require symfony/maker-bundle --dev
composer require symfony/orm-pack
composer require orm-fixtures --dev
composer require fakerphp/faker --dev
composer require security
composer require profiler --dev
composer require debug

# Terminal - Création base de donnée
symfony console make:docker:database
symfony console make:user
symfony console make:auth

symfony console make:entity
symfony console make:migration
symfony console doctrine:migrations:migrate
symfony console doctrine:fixtures:load

docker-compose run php php bin/console make:docker:database
docker-compose run php php bin/console make:user
docker-compose run php php bin/console make:auth

docker-compose run php php bin/console make:entity
docker-compose run php php bin/console make:migration
docker-compose run php php bin/console doctrine:migrations:migrate
docker-compose run php php bin/console doctrine:fixtures:load

# Terminal - Password
symfony console security:hash-password

# Shell mysql
mysql -p
use main

# Dossiers
project/src/
project/templates/
public/
