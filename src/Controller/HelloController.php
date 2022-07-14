<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Componet\Httpfoundation\request;
use Symfony\Component\Routing\annotation\Route;

class HelloController extends AbstractController {
    function hello( Request $request){

    }

}


/* class HelloController extends AbstractController {

    function hello(){
        $title = "utilisateurs";
        $users = ["houda", "yassine","aya"];
        return $this->render('hello.html.twig',['title'=> $title, 'array'=> $users]);


       # return  new Response('hello');
       # return $this->render();
       # return $this->redirectToRoute('/');
       # throw $this->createNotFoundException();
          #throw to return error
 */
          