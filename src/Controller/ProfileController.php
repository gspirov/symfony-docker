<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/{id}", name="app_profile")
     * @param User $user
     * @return Response
     */
    public function index(User $user)
    {
        return $this->render(
            'profile/index.html.twig',
            ['user' => $user]
        );
    }
}