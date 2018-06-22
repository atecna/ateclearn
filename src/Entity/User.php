<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class User
 * @package App\Entity
 *
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
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
     * @var string The UserName of User
     *
     * @ORM\Column(type="string")
     */
    private $username;

    /**
     * @var string The Password of User
     *
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @var Collection The UserQuestionAnswer of User
     *
     * @ORM\OneToMany(targetEntity="UserQuestionAnswer", mappedBy="user")
     */
    private $userQuestionAnswers;

    public function __construct()
    {
        $this->userQuestionAnswers = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * {@inheritdoc}
     */
    public function getSalt()
    {
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials()
    {
        return;
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
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
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
     * @return User
     */
    public function setUserQuestionAnswers(Collection $userQuestionAnswers): self
    {
        $this->userQuestionAnswers = $userQuestionAnswers;
        return $this;
    }
}
