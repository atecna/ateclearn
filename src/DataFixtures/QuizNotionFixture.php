<?php

namespace App\DataFixtures;

use App\Entity\Notion;
use App\Entity\Quiz;
use App\Entity\QuizNotion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class QuizNotionFixture extends Fixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        /** @var Quiz $quiz */
        $quiz = $this->getReference('quiz');

        /** @var Notion $notion */
        $notion = $this->getReference('notion');

        $quizNotion = (new QuizNotion())
            ->setQuiz($quiz)
            ->setNotion($notion);
        $manager->persist($quizNotion);

        $manager->flush();

        $this->addReference('quizNotion', $quizNotion);
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        return [
            QuizFixture::class,
            NotionFixture::class
        ];
    }
}
