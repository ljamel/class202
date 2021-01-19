<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class indexController extends AbstractController
{


    public function index()
    {
        // ici mon code php
        return $this->render('index.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }

    public function propos()
    {
        // ici mon code php
        return $this->render('propos.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }
}

