<?php

namespace App\Controller;

use App\BusinessService\QuizBusinessService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/dashboard", name="dashboard_")
 */
class DashboardController extends AbstractController
{
    /**
     * @Route("", name="homepage")
     * @param QuizBusinessService $quizBusinessService
     * @return Response
     */
    public function homepage(QuizBusinessService $quizBusinessService): Response
    {
        $quizzes = $quizBusinessService->getAll();

        return $this->render('dashboard/homepage.html.twig', [
                "quizzes" => $quizzes,
            ]
        );
    }
}
