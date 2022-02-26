<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserAdressController extends AbstractController
{
    #[Route('/user/adress', name: 'user_adress')]
    public function index(): Response
    {
        return $this->render('user_adress/index.html.twig', [
            'controller_name' => 'UserAdressController',
        ]);
    }
}
