<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:default:home.html.twig');
    }
    //this is for posts
    
     /**
     * @Route("/post", name="post")
     */
    public function postAction()
    {
        return $this->render('AppBundle:page:post.html.twig');
    }
     
     /**
     * @Route("/posts", name="posts")
     */
     public function postsAction()
    {
        return $this->render('AppBundle:page:posts.html.twig');
    }
}

