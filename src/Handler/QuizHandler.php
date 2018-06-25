<?php

namespace App\Handler;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class QuizHandler
 * @package App\Handler
 */
class QuizHandler
{
    /**
     * @var ObjectManager
     */
    private $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }
}
