<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnswerFixture extends Fixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        $answer = (new Answer())
            ->setName('1994');
        $manager->persist($answer);

        $manager->flush();

        $this->addReference('answer', $answer);
    }
}
