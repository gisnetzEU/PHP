<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * Método index
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(): Response{
        // return $this->render('default/index.html.twig', [
        //     'controller_name' => 'DefaultController',
        // ]);
        //return new Response('Hola mundo!');
        return $this->render('portada.html.twig');
    }
    
     /**
     * Método saludar
     * @Route("/saludar/{nombre}")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    // public function saludar($nombre = 'Foo'){
    //     return new Response("Hola $nombre");
    // }

    public function saludar(String $nombre = 'Foo'): Response{
        return $this->render('saludar.html.twig', ['nombre'=>$nombre]);
    }


}
