<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class QuizQuestion
 * @package App\Entity
 * @ORM\Entity
 */
class QuizQuestion
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
     * @var Quiz The Quiz of QuizQuestion
     *
     * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="quizQuestions")
     */
    private $quiz;

    /**
     * @var Question The Question of QuizQuestion
     *
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="quizQuestions")
     */
    private $question;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Quiz
     */
    public function getQuiz(): Quiz
    {
        return $this->quiz;
    }

    /**
     * @param Quiz $quiz
     * @return QuizQuestion
     */
    public function setQuiz(Quiz $quiz): self
    {
        $this->quiz = $quiz;
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
     * @return QuizQuestion
     */
    public function setQuestion(Question $question): self
    {
        $this->question = $question;
        return $this;
    }
}
