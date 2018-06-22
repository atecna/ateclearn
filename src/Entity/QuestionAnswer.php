<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class QuestionAnswer
 * @package App\Entity
 * @ORM\Entity
 */
class QuestionAnswer
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
     * @var boolean The Good of QuestionAnswer
     *
     * @ORM\Column(name="is_good", type="boolean", nullable=false, options={"default": false})
     */
    private $good;

    /**
     * @var Question The Question of QuestionAnswer
     *
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="questionAnswers")
     */
    private $question;

    /**
     * @var Answer The Answer of QuestionAnswer
     *
     * @ORM\ManyToOne(targetEntity="Answer", inversedBy="questionAnswers")
     */
    private $answer;

    /**
     * @var Collection The UserQuestionAnswer of QuestionAnswer
     *
     * @ORM\OneToMany(targetEntity="UserQuestionAnswer", mappedBy="questionAnswer")
     */
    private $userQuestionAnswers;

    public function __construct()
    {
        $this->userQuestionAnswers = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isGood(): bool
    {
        return $this->good;
    }

    /**
     * @param bool $good
     * @return QuestionAnswer
     */
    public function setGood(bool $good): self
    {
        $this->good = $good;
        return $this;
    }

    /**
     * @return Question
     */
    public function getQuestion(): Question
    {
        return $this->question;
    }

    /**
     * @param Question $question
     * @return QuestionAnswer
     */
    public function setQuestion(Question $question): self
    {
        $this->question = $question;
        return $this;
    }

    /**
     * @return Answer
     */
    public function getAnswer(): Answer
    {
        return $this->answer;
    }

    /**
     * @param Answer $answer
     * @return QuestionAnswer
     */
    public function setAnswer(Answer $answer): self
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getUserQuestionAnswers(): Collection
    {
        return $this->userQuestionAnswers;
    }

    /**
     * @param Collection $userQuestionAnswers
     * @return QuestionAnswer
     */
    public function setUserQuestionAnswers(Collection $userQuestionAnswers): self
    {
        $this->userQuestionAnswers = $userQuestionAnswers;
        return $this;
    }
}
