<?php

namespace App\DataFixtures;

use App\Entity\QuestionAnswer;
use App\Entity\User;
use App\Entity\UserQuestionAnswer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserQuestionAnswerFixture extends Fixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager): void
    {
        /** @var User $user */
        $user = $this->getReference('user');

        /** @var QuestionAnswer $questionAnswer */
        $questionAnswer = $this->getReference('questionAnswer');

        $userQuestionAnswer = (new UserQuestionAnswer())
            ->setUser($user)
            ->setQuestionAnswer($questionAnswer);
        $manager->persist($userQuestionAnswer);

        $manager->flush();

        $this->addReference('userQuestionAnswer', $userQuestionAnswer);
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        return [
            UserFixture::class,
            QuestionAnswerFixture::class
        ];
    }
}
