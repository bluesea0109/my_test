<?php

namespace App\Controller;

use App\Entity\Answer;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StatisticsController extends AbstractController {
    /**
     * @Route("/statistics", name="statistics")
     */
    public function index() {

    	$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    	$weights = $this->getDoctrine()->getRepository(Answer::class)->getWeights();

        return $this->render('statistics/index.html.twig', ['weights' => $weights]);
    }
}
