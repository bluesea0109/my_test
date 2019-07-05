<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Answer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionsController extends AbstractController {
    /**
     * @Route("/questions", name="questions")
     */
    public function index() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    	$questions = $this->getDoctrine()->getRepository(Question::class)->findAll();

    	$weights = $this->getDoctrine()->getRepository(Answer::class)->getWeights();

        // $user = $this->getUser();

	    return $this->render('questions/index.html.twig', ['questions' => $questions, 'weights' => $weights]);
    }

    /**
     * @Route("/addAnswer", name="addAnswer")
     */

    public function addAction(Request $request, ObjectManager $manager) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');


        $arrlength = count($request->request->all());

        foreach($request->request->all() as $x => $x_value) {
            $answer = new Answer();
            $answer->setUserId($this->getUser()->getId());
            $answer->setQuestionId((int)$x);
            $answer->setWeight((int)$x_value);
            $manager->persist($answer);
        }

        $this->getUser()->setStatus(1);
        $manager->persist($this->getUser());

        $manager->flush();

        return $this->render('questions/finish.html.twig', ['result' => 'Thank you for submitting!']);
    }
}
