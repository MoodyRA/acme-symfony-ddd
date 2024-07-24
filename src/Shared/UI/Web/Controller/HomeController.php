<?php

namespace App\Shared\UI\Web\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{

    #[Route(path : '/', name: 'home')]
    public function index() {
        return $this->render('home/index.html.twig');
    }
}