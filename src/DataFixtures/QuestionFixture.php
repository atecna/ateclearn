<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionFixture extends Fixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        $question = (new Question())
            ->setName('En quelle année a été créé PHP ?');
        $manager->persist($question);

        $manager->flush();

        $this->addReference('question', $question);
    }
}
