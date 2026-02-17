<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Catégorie 1
        $category = new Category();
        $category->setName("Jeux de société");
        $category->setDescription("Un jeu de société est une activité ludique qui réunit 
            plusieurs participants autour d’un objectif commun, souvent pour s’amuser, 
            se divertir ou apprendre.");
        $manager->persist($category);
        
        // Catégorie 2
        $category = new Category();
        $category->setName("Jeux éducatifs");
        $category->setDescription("Un jeu éducatif est une activité ludique conçue pour permettre aux participants d’acquérir de nouvelles connaissances ou de développer des compétences spécifiques");
        $manager->persist($category);
        
        // Catégorie 3
        $category = new Category();
        $category->setName("Jeux vidéos");
        $category->setDescription("Un jeu vidéo est un jeu électronique doté d'une interface utilisateur permettant une interaction humaine ludique en générant un retour visuel sur un dispositif vidéo.");
        $manager->persist($category);
        
        // Categorie 4
        $category = new Category();
        $category->setName("Jeux de rôle");
        $category->setDescription("Le jeu de rôle est une activité où les participants incarnent un personnage et interagissent dans un univers réel ou fictif, influençant l’histoire par leurs actions et décisions.");
        $manager->persist($category);

        $manager->flush();
    }
}
