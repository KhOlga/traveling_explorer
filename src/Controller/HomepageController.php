<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        return $this->render('welcome/homepage.html.twig', [
            'controller_name' => 'HomepageController',
            'number' => $number = rand(0, 100),
        ]);

    }

   }
