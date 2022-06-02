<?php
namespace App\Components;

use App\Entity\Spiele;
use App\Entity\TurniereLiga;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('spielplan')]
class SpielplanComponent extends AbstractController
{
    use DefaultActionTrait;

    public array $spiele;

    public ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[LiveAction]
    public function addTor()
    {
        $turnierId = 1007;
        $turnier = $this->doctrine->getRepository(TurniereLiga::class)->find($turnierId);

        $spiele = $this->doctrine->getRepository(Spiele::class)->findBy(['turnier' => $turnier]);
        foreach ($spiele as $spiel){
            $spiel->setToreB($spiel->getToreB() + 1);
            $this->doctrine->getManager()->persist($spiel);
        }
        $this->doctrine->getManager()->flush();
        $this->addFlash('success', "TOR erfolgreich hinzugefügt");
        return $this->redirectToRoute('app_spielplan', ['turnierId' => $turnierId]);

    }

    #[LiveAction]
    public function resetTore()
    {
        $turnierId = 1007;
        $turnier = $this->doctrine->getRepository(TurniereLiga::class)->find($turnierId);

        $this->addFlash('success', "TORE RESET ERFOLGREICH");
        $spiele = $this->doctrine->getRepository(Spiele::class)->findBy(['turnier' => $turnier]);
        foreach ($spiele as $spiel){
            $spiel->setToreB(0);
            $spiel->setToreA(0);
            $this->doctrine->getManager()->persist($spiel);
        }
        $this->doctrine->getManager()->flush();
        return $this->redirectToRoute('app_spielplan', ['turnierId' => $turnierId]);
    }

    #[LiveAction]
    public function getSpiele(): array
    {
        $turnierId = 1007;
        $turnier = $this->doctrine->getRepository(TurniereLiga::class)->find($turnierId);

        $spiele = $this->doctrine->getRepository(Spiele::class)->findBy(['turnier' => $turnier]);
        $this->spiele = $spiele;
        return $spiele;
    }

}
