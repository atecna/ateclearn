<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("", name="security_")
 */
class SecurityController extends AbstractController
{
    /**
     * @Route("", name="index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->redirectToRoute("dashboard_homepage");
    }

    /**
     * @Route("/login", name="login")
     * @return Response
     */
    public function login(): Response
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/login/check", name="login_check")
     * @return Response
     */
    public function loginCheck(): Response
    {
    }

    /**
     * @Route("/logout", name="logout")
     * @return Response
     */
    public function logout(): Response
    {
    }
}
