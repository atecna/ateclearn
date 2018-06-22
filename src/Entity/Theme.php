<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Theme
 * @package App\Entity
 * @ORM\Entity
 */
class Theme
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
     * @var Collection The QuestionTheme of Theme
     *
     * @ORM\OneToMany(targetEntity="QuestionTheme", mappedBy="theme")
     */
    private $questionThemes;

    public function __construct()
    {
        $this->questionThemes = new ArrayCollection();
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
     * @return Theme
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getQuestionThemes(): Collection
    {
        return $this->questionThemes;
    }

    /**
     * @param Collection $questionThemes
     * @return Theme
     */
    public function setQuestionThemes(Collection $questionThemes): self
    {
        $this->questionThemes = $questionThemes;
        return $this;
    }
}
