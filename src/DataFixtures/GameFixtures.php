<?php
namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as FakerFactory;

    class GameFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        $faker = FakerFactory::create('fr_FR');

        for ($i=1; $i < 50; $i++) {
            $game = new Game();
            $game->setName($faker->word());
            $game->setDescription($faker->paragraph());
            $firstAge = $faker->numberBetween(2, 18);
            if ($firstAge < 10) {
                $lastAge = $firstAge + 5;
                $age = $firstAge . "-" . $lastAge;
            } else {
                $age = $firstAge . "+";
            }
            $game->setAgeRange($age);
            $numCat = $faker->numberBetween(1,4);
            $category = $this->getReference('cat' . $numCat, Category::class);
            $game->addCategory($category);
            $game->setNbPlayer($faker->numberBetween(1,10));
            $game->setEditor($faker->word());
            $manager->persist($game);
        }

        $manager->flush();
    }

    public function getDependencies(): array {
        return [
            CategoryFixtures::class
        ];
    }
}
