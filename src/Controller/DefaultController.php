<?php

namespace App\Controller;

use App\Entity\TeamsDetails;
use App\Entity\TeamsLiga;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DefaultController extends AbstractController
{
    public function index(): Response
    {
        return new Response('Hello Ansgar!');
    }

   /**
    * @Route("/test/{name}")
    */
    public function test(Request $request, $name): Response
    {
        // creates a task object and initializes some data for this example
        $teamLiga = new TeamsLiga();
        $teamDetails = new TeamsDetails();
        $teamLiga->setTeamname("Ansgar");
        $teamLiga->setAktiv(true);
        $form = $this->createFormBuilder()
            ->add('teamname', TextType::class)
            ->add('passwort', TextType::class)
            ->add('email', TextType::class)
            ->getForm();

        $form->handleRequest($request);
//        dump($teamLiga);
        dump($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $test = $form->getData();

            dump($test);

//            return $this->redirect('zwei');
        }

        $view = $form->createView();

        return $this->render('default/index.html.twig', [
            'name' => $name,
            'form' => $view,
            'team' => $teamLiga,
        ]);
    }

    /**
     * @Route("/simple")
     */
    public function simple(): Response
    {
        return new Response('Simple! Easy! Great!');
    }

}
