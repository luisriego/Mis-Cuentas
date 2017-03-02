<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setUsername('admin');
        $user1->setPlainPassword('test');
        $user1->setEmail('luisriego@hotmail.com');
        $user1->setRoles(array('ROLE_ADMIN'));
        $user1->setEnabled(true);


        $user2 = new User();
        $user2->setUsername('alexis');
        $user2->setPlainPassword('anapaula');
        $user2->setEmail('alexisnonato@gmail.com');
        $user2->setEnabled(true);



        $manager->persist($user1);
        $manager->persist($user2);

        $manager->flush();

        $this->addReference('user', $user1);
        $this->addReference('user1', $user2);
    }

    public function getOrder()
    {
        return 20;
    }
}