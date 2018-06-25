<?php

namespace App\DataFixtures;

use App\Entity\Question;
use App\Entity\QuestionTheme;
use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionThemeFixture extends Fixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        /** @var Question $question */
        $question = $this->getReference('question');

        /** @var Theme $theme */
        $theme = $this->getReference('theme');

        $questionTheme = (new QuestionTheme())
            ->setQuestion($question)
            ->setTheme($theme);
        $manager->persist($questionTheme);

        $manager->flush();

        $this->addReference('questionTheme', $questionTheme);
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        return [
            QuestionFixture::class,
            ThemeFixture::class,
        ];
    }
}
