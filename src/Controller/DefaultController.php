<?php

namespace App\Controller;

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
    public function test($name): Response
    {
        return $this->render('default/index.html.twig', [
            'name' => $name,
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
