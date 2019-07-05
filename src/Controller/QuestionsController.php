<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuestionsController extends AbstractController
{
    /**
     * @Route("/questions", name="questions")
     */
    public function index()
    {
        return $this->render('questions/index.html.twig', [
            'controller_name' => 'QuestionsController',
        ]);
    }
}
