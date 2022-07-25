<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Portfolio;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PortfolioFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $portfolio = new Portfolio();
        $portfolio->setTitle('Apside');
        $portfolio->setDate(new DateTime('2022-06-30'));
        $portfolio->setImage('abc.jpg'); 
        $portfolio->setTheme('Création de site web');
        $portfolio->setStack('PHP, Figma');
        $portfolio->setCategory($this->getReference('category_0'));
        $manager->persist($portfolio);
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
