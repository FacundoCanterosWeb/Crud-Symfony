<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index()
    {
        return $this->render('user/users.html.twig');
        #La funcion index, retornamos accediendo a la renderizacion con el metodo $this a users.html.twig
        
    }
}
