<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserQuestionAnswer
 * @package App\Entity
 * @ORM\Entity
 */
class UserQuestionAnswer
{
    /**
     * @var int The Entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var User The User of UserQuestionAnswer
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userQuestionAnswers")
     */
    private $user;

    /**
     * @var QuestionAnswer The QuestionAnswer of UserQuestionAnswer
     *
     * @ORM\ManyToOne(targetEntity="QuestionAnswer", inversedBy="userQuestionAnswers")
     */
    private $questionAnswer;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return UserQuestionAnswer
     */
    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return QuestionAnswer
     */
    public function getQuestionAnswer(): QuestionAnswer
    {
        return $this->questionAnswer;
    }

    /**
     * @param QuestionAnswer $questionAnswer
     * @return UserQuestionAnswer
     */
    public function setQuestionAnswer(QuestionAnswer $questionAnswer): self
    {
        $this->questionAnswer = $questionAnswer;
        return $this;
    }
}
