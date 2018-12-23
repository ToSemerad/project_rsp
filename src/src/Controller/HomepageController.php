<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
    /**
     * @Route("/pro-autory", name="homepage_pro_autory")
     */
    public function authors()
    {
        return $this->render('homepage/pro-autory.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
    /**
     * @Route("/archiv", name="homepage_archiv")
     */
    public function archive()
    {
        return $this->render('homepage/archiv.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}
