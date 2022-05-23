<?php

namespace App\Controller;

use App\Entity\TeamsLiga;
use App\Entity\TurniereLiga;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TurnierController extends AbstractController
{
    /**
     * @throws \JsonException
     */
    #[Route('/turnier', name: 'get_turnier')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $turnier = $doctrine->getRepository(TurniereLiga::class)->find(1000);

        if (!$turnier) {
            throw $this->createNotFoundException(
                'No product found for id '. 1000
            );
        }

        dump($turnier);
        dump($turnier->getAusrichter());
        $team = $doctrine->getRepository(TeamsLiga::class)->findOneBy(['teamname' => 'SKV Mörfelden Joker']);
        dump($team);

        $team = $doctrine->getRepository(TeamsLiga::class)->findOneBy(['teamname' => 'SKV Mörfelden Joker']);

        return new Response("Found: " . $team->getTeamId());
    }
}
