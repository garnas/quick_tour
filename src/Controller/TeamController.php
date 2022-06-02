<?php

namespace App\Controller;

use App\Entity\TeamsDetails;
use App\Entity\TeamsKontakt;
use App\Entity\TeamsLiga;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    /**
     * @Route("/team")
     */
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $teamLiga = new TeamsLiga();
        $teamLiga->setAktiv(true);
        $teamLiga->setTeamname("Ansgar");
        $kontakt = new TeamsKontakt();

        $form = $this->createFormBuilder()
            ->add('teamname', TextType::class)
            ->add('passwort', TextType::class)
            ->add('email', EmailType::class)
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isSubmitted()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $test = $form->getData();

            return $this->redirect('team');
        }


        return $this->renderForm('team/form.html.twig', [
            'form' => $form,
        ]);
    }
}