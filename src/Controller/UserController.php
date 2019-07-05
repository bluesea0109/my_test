<?php

namespace App\Controller;

use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserController extends AbstractController {
    /**
     * @Route("/user", name="user")
     */
    public function index(AuthorizationCheckerInterface $authChecker) {

        if (false === $authChecker->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Unable to access this page!');
        }

    	$users = $this->getDoctrine()->getRepository(User::class)->getUsers();

	    return $this->render('user/index.html.twig', ['users' => $users]);
        // return $this->render('user/index.html.twig', [
        //     'controller_name' => 'UserController',
        // ]);	
    }
}
