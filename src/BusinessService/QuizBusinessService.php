<?php

namespace App\BusinessService;

use App\Handler\QuizHandler;
use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ObjectManager;

class QuizBusinessService
{
    /**
     * @var QuizRepository
     */
    private $quizRepository;

    /**
     * @var QuizHandler
     */
    private $quizHandler;

    public function __construct(ObjectManager $objectManager, QuizHandler $quizHandler)
    {
        $this->quizRepository = $objectManager->getRepository("App:Quiz");
        $this->quizHandler = $quizHandler;
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return new ArrayCollection($this->quizRepository->findAll());
    }
}
