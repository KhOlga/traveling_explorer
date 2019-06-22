<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/services", name="services")
     */
    public function services()
    {
        return $this->render('pages/services.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }


    /**
     * @Route("/our_company", name="our_company")
     */
    public function our_company()
    {
        return $this->render('pages/our_company.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }


    /**
     * @Route("/hot_tours", name="hot_tours")
     */
    public function hot_tours()
    {
        return $this->render('pages/hot_tours.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }


    /**
     * @Route("/customers_reviews", name="customers_reviews")
     */
    public function customers_reviews()
    {
        return $this->render('pages/customers_reviews.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/our_team", name="our_team")
     */
    public function our_team()
    {
        return $this->render('pages/our_team.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }


    /**
     * @Route("/contacts", name="contacts")
     */
    public function contacts()
    {
        return $this->render('pages/contacts.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }



}
