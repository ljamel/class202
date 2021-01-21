<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class indexController extends AbstractController
{


    public function index()
    {

        $tables = array('value1', 'value2', 'autre');

        foreach($tables as $table){
            echo $table;
        }

        $entityManager = $this->getDoctrine()->getManager();
        $users = $entityManager->getRepository(User::class)->findAll();

        dd($users);

        // ici mon code php
        return $this->render('index.html.twig', [
            'tables' => $tables
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

