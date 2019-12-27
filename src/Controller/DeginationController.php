<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DeginationController extends AbstractController
{
    public $entityManager;

    function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/degination/{Id}", name="degination")
     */
    public function index(int $Id)
    {
        $query  = "SELECT * from event WHERE id = 9";
        $connection = $this->entityManager->getConnection();
        $result = $connection->exec($query);
        print_r($result);exit;


        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DeginationController.php',
        ]);
    }
}
