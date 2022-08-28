<?php


namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WorkPlaceController extends AbstractController
{

    #[Route(path: '/', name: 'homepage')]
    public function login(): Response
    {

        return $this->render('base.html.twig');
    }

}