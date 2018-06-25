<?php

namespace App\DataFixtures;

use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ThemeFixture extends Fixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        $theme = (new Theme())
            ->setName('theme1');
        $manager->persist($theme);

        $manager->flush();

        $this->addReference('theme', $theme);
    }
}
