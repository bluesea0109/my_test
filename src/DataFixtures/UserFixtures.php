<?php

namespace App\DataFixtures;

use App\Entity\User;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('test@example.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('$13$S2LrAzbOmd4.v0/xeI8KmO0faCfZv.G8SMtaCzC/9mUGVNOb3tMKG');
        $user->setStatus(0);
        $manager->persist($user);

        $manager->flush();
    }
}
