<?php

namespace App\Controller;

use App\Entity\Spiele;
use App\Entity\TurniereLiga;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpielplanController extends AbstractController
{
    /**
     * @throws \Exception
     */
    #[Route('/spielplan/{turnierId}', name: 'app_spielplan')]
    public function index(int $turnierId, ManagerRegistry $doctrine): Response
    {
        $turnier = $doctrine->getRepository(TurniereLiga::class)->find($turnierId);

        $spiele = $doctrine->getRepository(Spiele::class)->findBy(['turnier' => $turnier]);
//        foreach ($spiele as $spiel){
//            $spiel->setToreA(random_int(0,10));
//            $spiel->setToreB(random_int(0,10));
//        }
        return $this->render('spielplan/index.html.twig', [
            'controller_name' => 'SpielplanController',
            'spiele' => $spiele,
            'turnierId' => $turnierId
        ]);
    }

    /**
     * @throws \Exception
     */
    #[Route('/spielplan/tore/{turnierId}', name: 'app_tore')]
    public function setTore(int $turnierId, ManagerRegistry $doctrine): Response
    {
        $turnier = $doctrine->getRepository(TurniereLiga::class)->find($turnierId);

        $spiele = $doctrine->getRepository(Spiele::class)->findBy(['turnier' => $turnier]);

        $entityManager = $doctrine->getManager();

        foreach ($spiele as $spiel){
            $spiel->setToreA($spiel->getToreA()+1);
            $spiel->setToreB($spiel->getToreB()+1);

            $entityManager->persist($spiel);
        }

        $entityManager->flush();

        return $this->redirect("/spielplan/$turnierId");
    }


}
