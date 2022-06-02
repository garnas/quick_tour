<?php

namespace App\Service;

use App\Entity\Spiele;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;

class SpielplanService
{
    private ObjectManager $em;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->em = $doctrine->getManager();
    }

    public function addTorB(Spiele $spiel)
    {
        $toreB = $spiel->getToreB();
        $spiel->setToreB($toreB++);
        $this->em->persist($spiel);
        return $this;
    }
    public function addTorA(Spiele $spiel)
    {
        $toreA = $spiel->getToreA();
        $spiel->setToreA($toreA++);
        $this->em->persist($spiel);
        return $this;
    }
}