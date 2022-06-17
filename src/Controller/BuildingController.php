<?php

namespace App\Controller;

use App\Entity\Building;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class BuildingController extends AbstractController
{
    /**
     * @Route("/building", name="app_building")
     */
    public function list(EntityManagerInterface $entityManager)
    {
        $buildings = $entityManager
            ->getRepository(Building::class)
            ->findAll();

        return $this->render('building/list.html.twig', [
            'buildings' => $buildings,
        ]);
    }
}
