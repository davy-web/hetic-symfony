<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Role;
use App\Entity\Annonce;
use App\Entity\Tag;

class AppFixtures extends Fixture
{
    // private $encoder;

    // public function __construct(UserPasswordEncoderInterface $encoder)
    // {
    //     $this->encoder = $encoder;
    // }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $date_now = new \DateTime('@'.strtotime('now'));

        // User
        // $user = new User();
        // $user->setEmail('chendavyweb@gmail.com');
        // $user->setName('Davy');
        // $password = $encoder->encodePassword($user, 'password');
        // $user->setPassword($password);
        
        // $manager->persist($user);
        
        // Role
        $role = new Role();
        $role->setNom('Admin');
        $role->setUserId(1);

        $manager->persist($role);

        // Annonce
        for ($i = 0; $i < 10; $i++) {    
            $annonce = new Annonce();
            $annonce->setTitre($faker->words(2, true));
            $annonce->setDescription($faker->text());
            $annonce->setPhotoPrincipale('photo.jpg');
            $annonce->setPrix($faker->randomFloat(2, 20, 60));
            $annonce->setDatePublication($faker->dateTimeBetween('-3 month', 'now'));
            $annonce->setAuteur($faker->name());
            
            $manager->persist($annonce);
        }
        
        // Tag
        for ($i = 0; $i < 5; $i++) {
            $tag = new Tag();
            $tag->setNom($faker->word());
            $tag->setAnnonceId($faker->unique()->randomDigit(2, 5, 10));

            $manager->persist($tag);
        }

        $manager->flush();
    }
}
