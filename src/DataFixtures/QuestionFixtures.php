<?php

namespace App\DataFixtures;

use App\Entity\Question;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon0');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon1');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon2');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon3');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon4');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon5');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon6');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon7');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon8');
        $manager->persist($question);

        $question = new Question();
        $question->setContent('Why Asteroids Taste Like Bacon9');
        $manager->persist($question);

        $manager->flush();
    }
}
