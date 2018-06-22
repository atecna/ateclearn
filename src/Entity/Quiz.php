<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Quiz
 * @package App\Entity
 * @ORM\Entity
 */
class Quiz
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
     * @var string The Name of Quiz
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $name;

    /**
     * @var Collection The QuizNotion of Quiz
     *
     * @ORM\OneToMany(targetEntity="QuizNotion", mappedBy="quiz")
     */
    private $quizNotions;

    /**
     * @var Collection The QuizQuestion of Quiz
     *
     * @ORM\OneToMany(targetEntity="QuizQuestion", mappedBy="quiz")
     */
    private $quizQuestions;

    public function __construct()
    {
        $this->quizNotions = new ArrayCollection();
        $this->quizQuestions = new ArrayCollection();
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
     * @return Quiz
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getQuizNotions(): Collection
    {
        return $this->quizNotions;
    }

    /**
     * @param Collection $quizNotions
     * @return Quiz
     */
    public function setQuizNotions(Collection $quizNotions): self
    {
        $this->quizNotions = $quizNotions;
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
     * @return Quiz
     */
    public function setQuizQuestions(Collection $quizQuestions): self
    {
        $this->quizQuestions = $quizQuestions;
        return $this;
    }
}
