<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSecurityController extends AbstractController
{

    public function showDashboard()
    {
        return $this->render('admin/dashboard.html.twig', []);
    }


}
