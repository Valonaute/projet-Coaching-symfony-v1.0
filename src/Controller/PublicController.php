<?php

namespace App\Controller ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Controller dédié à l'affichage des pages public via les templates twig

class PublicController extends AbstractController
{
    public function showHome()
    {
        return $this->render('public/home.html.twig', []);
    }

    public function showFormations()
    {
        return $this->render('public/formations.html.twig', []);
    }
    public function showForum()
    {
        return $this->render('public/forum.html.twig', []);
    }

    public function showStore()
    {
        return $this->render('public/store.html.twig', []);
    }

    public function showBlog()
    {
        return $this->render('public/blog.html.twig', []);
    }

    public function showConnexion()
    {
        return $this->render('public/connexion.html.twig', []);
    }

    public function showMapsite()
    {
        return $this->render('public/mapsite.html.twig', []);
    }

    public function showContact()
    {
        return $this->render('public/contact.html.twig', []);
    }

    public function showValonauteinc()
    {
        return $this->render('public/valonauteinc.html.twig', []);
    }

    public function showCareers()
    {
        return $this->render('public/careers.html.twig', []);
    }

    public function showCgu()
    {
        return $this->render('public/cgu.html.twig', []);
    }

    public function showRgpd()
    {
        return $this->render('public/rgpd.html.twig', []);
    }
}