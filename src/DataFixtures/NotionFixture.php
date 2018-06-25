<?php

namespace App\DataFixtures;

use App\Entity\Notion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class NotionFixture extends Fixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        $notion = (new Notion())
            ->setName('notion1');
        $manager->persist($notion);

        $manager->flush();

        $this->addReference('notion', $notion);
    }
}
