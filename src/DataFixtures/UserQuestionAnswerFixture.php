<?php

namespace App\DataFixtures;

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
    public function load(ObjectManager $manager)
    {
        /** @var User $user */
        $user = $this->getReference('user');

        $userQuestionAnswer = (new UserQuestionAnswer())
            ->setUser($user);
        $manager->persist($userQuestionAnswer);

        $manager->flush();

        $this->addReference('userQuestionAnswer', $userQuestionAnswer);
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [
            UserFixture::class,
        ];
    }
}
