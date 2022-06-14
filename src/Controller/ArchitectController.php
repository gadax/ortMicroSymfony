<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArchitectController extends AbstractController
{
    /**
     * @Route("/architect", name="app_architect")
     */
    public function list()
    {
        return Response('<html><body>ok</body></html>');
    }
}
