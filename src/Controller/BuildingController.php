<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BuildingController extends AbstractController
{
    /**
     * @Route("/building", name="app_building")
     */
    public function list()
    {
        return Response('<html><body>ok</body></html>');
    }
}
