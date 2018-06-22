<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Answer
 * @package App\Entity
 * @ORM\Entity
 */
class Answer
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
     * @var Collection The QuestionAnswer of Answer
     *
     * @ORM\OneToMany(targetEntity="QuestionAnswer", mappedBy="answer")
     */
    private $questionAnswers;

    public function __construct()
    {
        $this->questionAnswers = new ArrayCollection();
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
     * @return Answer
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
     * @return Answer
     */
    public function setQuestionAnswers(Collection $questionAnswers): self
    {
        $this->questionAnswers = $questionAnswers;
        return $this;
    }
}
