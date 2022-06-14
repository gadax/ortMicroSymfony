<?php

namespace App\Controller;

use App\Entity\Architect;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
	public function number($max)
	{
		$number = random_int(0, $max);

		// return new Response(
		// 	'<html><body> number : '
		// 	. (int) $number
		// 	. '</body></html>'
		// );

		return $this->render('dice.html.twig', ['dice' => $number]);
	}

	public function db()
	{
		// cli symfony
		// php bin/console doctrine:query:sql "select * from building order by height_meters"

        $arch = $this->getDoctrine()->getManager()
        	->getRepository(Architect::class)->find(1);

        $arch->setName($arch->getName() . ' fa');
        // $entityManager->persist($product);
        // $entityManager->flush();

		return new Response(
			'<html><body> entity : '
			. $arch->getName()
			. '</body></html>'
		);
	}
}