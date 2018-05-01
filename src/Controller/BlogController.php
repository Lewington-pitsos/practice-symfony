<?php

// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog/{page}", name="blog_list")
     */
    public function list($page = 1)
    {

      $url = $this->generateUrl('blog_list', array('page' => 'dsfsdhfjdshfjdf'));
      echo $url;
      // ...
    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
      echo $slug;
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }
}
