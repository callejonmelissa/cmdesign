<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        ['name' => 'UX/UI DESIGN & DÉVELOPPEMENT WEB', 'slug' => 'ux-ui-design-dev-web', 'template' => 'uxui'],
        ['name' => 'GRAPHIC DESIGN', 'slug' => 'graphic-design', 'template' => 'graphicdesign'],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName['name']);
            $category->setSlug($categoryName['slug']);
            $category->setTemplate($categoryName['template']);
            $manager->persist($category);
            $this->addReference('category_' . $key, $category);
        }
        $manager->flush();
    }
}
