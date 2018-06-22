<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class QuizNotion
 * @package App\Entity
 * @ORM\Entity
 */
class QuizNotion
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
     * @var Quiz The Quiz of QuizNotion
     *
     * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="quizNotions")
     */
    private $quiz;

    /**
     * @var Notion The Notion of QuestionAnswer
     *
     * @ORM\ManyToOne(targetEntity="Notion", inversedBy="quizNotions")
     */
    private $notion;

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
     * @return QuizNotion
     */
    public function setQuiz(Quiz $quiz): self
    {
        $this->quiz = $quiz;
        return $this;
    }

    /**
     * @return Notion
     */
    public function getNotion(): Notion
    {
        return $this->notion;
    }

    /**
     * @param Notion $notion
     * @return QuizNotion
     */
    public function setNotion(Notion $notion): self
    {
        $this->notion = $notion;
        return $this;
    }
}
