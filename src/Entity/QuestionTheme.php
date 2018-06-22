<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class QuestionTheme
 * @package App\Entity
 * @ORM\Entity
 */
class QuestionTheme
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
     * @var Question The Question of QuestionTheme
     *
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="questionThemes")
     */
    private $question;

    /**
     * @var Theme The Theme of QuestionTheme
     *
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="questionThemes")
     */
    private $theme;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
     * @return QuestionTheme
     */
    public function setQuestion(Question $question): self
    {
        $this->question = $question;
        return $this;
    }

    /**
     * @return Theme
     */
    public function getTheme(): Theme
    {
        return $this->theme;
    }

    /**
     * @param Theme $theme
     * @return QuestionTheme
     */
    public function setTheme(Theme $theme): self
    {
        $this->theme = $theme;
        return $this;
    }
}
