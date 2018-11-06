<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
//        public function list()
//    {
//        return $this->render('index.html.twig', [
//            'BlogController' => 'blog',
//        ]);
//    }

    /**
     * Matches /blog/*
     *
     *@Route("/blog/{slug}", name="blog_show", requirements={"slug"= "[a-z0-9\-]*"})
     *      */
    public function show($slug= 'Bien le bonjour bilbot le HHHobit')
    {
        $slug = ucwords(str_replace('-', ' ' , $slug));
        return $this->render('blog/index.html.twig', [
            'slug' => $slug,
        ]);
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }
}