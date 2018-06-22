<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Question
 * @package App\Entity
 * @ORM\Entity
 */
class Question
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
     * @var string The Name of Answer
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $name;

    /**
     * @var Collection The QuestionAnswer of Question
     *
     * @ORM\OneToMany(targetEntity="QuestionAnswer", mappedBy="question")
     */
    private $questionAnswers;

    /**
     * @var Collection The QuizQuestion of Question
     *
     * @ORM\OneToMany(targetEntity="QuizQuestion", mappedBy="question")
     */
    private $quizQuestions;

    /**
     * @var Collection The QuizTheme of Question
     *
     * @ORM\OneToMany(targetEntity="QuizTheme", mappedBy="question")
     */
    private $quizThemes;

    public function __construct()
    {
        $this->questionAnswers = new ArrayCollection();
        $this->quizQuestions = new ArrayCollection();
        $this->quizThemes = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Question
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getQuestionAnswers(): Collection
    {
        return $this->questionAnswers;
    }

    /**
     * @param Collection $questionAnswers
     * @return Question
     */
    public function setQuestionAnswers(Collection $questionAnswers): self
    {
        $this->questionAnswers = $questionAnswers;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getQuizQuestions(): Collection
    {
        return $this->quizQuestions;
    }

    /**
     * @param Collection $quizQuestions
     * @return Question
     */
    public function setQuizQuestions(Collection $quizQuestions): self
    {
        $this->quizQuestions = $quizQuestions;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getQuizThemes(): Collection
    {
        return $this->quizThemes;
    }

    /**
     * @param Collection $quizThemes
     * @return Question
     */
    public function setQuizThemes(Collection $quizThemes): self
    {
        $this->quizThemes = $quizThemes;
        return $this;
    }
}
