<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/{id}", name="app_profile")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function index(User $user, Request $request)
    {
        $form = $this->createForm(ProfileFormType::class, $user);

        if ($request->isMethod(Request::METHOD_POST)) {
        }

        return $this->render(
            'profile/index.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user
            ]
        );
    }
}