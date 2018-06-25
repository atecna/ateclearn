<?php

namespace App\DataFixtures;

use App\Entity\Question;
use App\Entity\Quiz;
use App\Entity\QuizQuestion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class QuizQuestionFixture extends Fixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        /** @var Question $question */
        $question = $this->getReference('question');

        /** @var Quiz $quiz */
        $quiz = $this->getReference('quiz');

        $quizQuestion = (new QuizQuestion())
            ->setQuestion($question)
            ->setQuiz($quiz);
        $manager->persist($quizQuestion);

        $manager->flush();

        $this->addReference('quizQuestion', $quizQuestion);
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        return [
            QuestionFixture::class,
            QuizFixture::class,
        ];
    }
}
