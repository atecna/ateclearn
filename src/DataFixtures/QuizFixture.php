<?php

namespace App\DataFixtures;

use App\Entity\Quiz;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuizFixture extends Fixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        $quiz = (new Quiz())
            ->setName('Quiz1');
        $manager->persist($quiz);

        $manager->flush();

        $this->addReference('quiz', $quiz);
    }
}
