<?php

namespace App\DataFixtures;

use App\Entity\Plat;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $plat = new Plat();
        $plat->setNom('Bœuf bourguignon');
        $plat->setDescription("Le bœuf bourguignon est une recette de cuisine d'estouffade de bœuf, traditionnelle de la cuisine bourguignonne, cuisinée au vin rouge de Bourgogne, avec une garniture de champignons, de petits oignons et de lardons. Les variations d'accompagnement sont multiples.");
        $manager->persist($plat);

        $plat = new Plat();
        $plat->setNom('Poulet Marengo');
        $plat->setDescription("Le poulet Marengo ou veau Marengo ou lapin Marengo ou sauce Marengo est une recette de cuisine traditionnelle de la cuisine française à base de morceaux de poulet mijotés dans une sauce à la tomate et au vin blanc. ");
        $manager->persist($plat);

        /// 

        $categorie = new Category();
        $categorie->setName('Entrée');
        $manager->persist($categorie);

        $categorie = new Category();
        $categorie->setName('Plat');
        $manager->persist($categorie);

        $categorie = new Category();
        $categorie->setName('Dessert');
        $manager->persist($categorie);


        $manager->flush();


    }
}
