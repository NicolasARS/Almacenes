<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/secciones', name: 'secciones')]
    public function secciones(): Response
    {
        return $this->render('page/secciones.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/empleados/dar-alta', name: 'alta')]
    public function alta(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/empleados/eliminar/{id}', name: 'eliminar_empleado')]
    public function eliminar(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/empleados/ficha/{id}', name: 'ficha_empleado')]
    public function ficha(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/empleados/buscar/{texto}', name: 'buscar')]
    public function buscar(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
