<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class indexController extends AbstractController
{
    /**
     * @Route("/index/index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
        ]);

    }
}
?>