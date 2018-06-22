<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Notion
 * @package App\Entity
 * @ORM\Entity
 */
class Notion
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
     * @var Collection The QuizNotion of Notion
     *
     * @ORM\OneToMany(targetEntity="QuizNotion", mappedBy="Notion")
     */
    private $quizNotions;

    public function __construct()
    {
        $this->quizNotions = new ArrayCollection();
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
     * @return Notion
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
     * @return Notion
     */
    public function setQuizNotions(Collection $quizNotions): self
    {
        $this->quizNotions = $quizNotions;
        return $this;
    }
}
