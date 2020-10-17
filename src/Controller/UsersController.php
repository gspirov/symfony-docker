<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="app_users")
     * @param UserRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(UserRepository $repository,
                          PaginatorInterface $paginator,
                          Request $request)
    {
        $qb = $repository->findAllByCriteria(
            $request->query->get('username', 'George')
        );

        $pagination = $paginator->paginate(
            $qb,
            $request->query->get('page', 1),
            15
        );

        return $this->render('users/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @Route(
     *     "/add-friend/{friendId}",
     *     name="app_add_friend",
     *     condition="context.getMethod() === 'POST' and request.isXmlHttpRequest()"
     * )
     * @param User $friend
     */
    public function addFriend(User $friend)
    {
        
    }
}
