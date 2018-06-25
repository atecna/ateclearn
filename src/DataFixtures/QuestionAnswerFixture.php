<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\QuestionAnswer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionAnswerFixture extends Fixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        /** @var Question $question */
        $question = $this->getReference('question');

        /** @var Answer $answer */
        $answer = $this->getReference('answer');

        $questionAnswer = (new QuestionAnswer())
            ->setQuestion($question)
            ->setAnswer($answer)
            ->setGood(true);
        $manager->persist($questionAnswer);

        $manager->flush();

        $this->addReference('questionAnswer', $questionAnswer);
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        return [
            QuestionFixture::class,
            AnswerFixture::class,
        ];
    }
}
