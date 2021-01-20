<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class indexController extends AbstractController
{


    public function index()
    {

        $tables = array('value1', 'value2', 'autre');

        foreach($tables as $table){
            echo $table;
        }

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

