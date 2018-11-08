<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/demo", name="homepage")
     */
    public function index2Action(Request $request)
    {
        $posts=$this->getDoctrine()->getRepository('AppBundle:Massage')->findAll();
        // replace this example code with whatever you need
        dump($posts);
        // replace this example code with whatever you need
        return $this->render('default/index2.html.twig',array('posts'=>$posts));

    }
}
