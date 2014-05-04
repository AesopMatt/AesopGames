<?php

namespace ONN\AesopGamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','index');
        return $this->render('ONNAesopGamesBundle:Page:index.html.twig');
    }

    public function aboutAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','about');
        return $this->render('ONNAesopGamesBundle:Page:about.html.twig');
    }

    public function gamesAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','games');
        return $this->render('ONNAesopGamesBundle:Page:games.html.twig');
    }

    public function blogAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','blog');
        return $this->render('ONNAesopGamesBundle:Page:blog.html.twig');
    }

    public function contactAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('page','contact');
        return $this->render('ONNAesopGamesBundle:Page:contact.html.twig');
    }

    public function navbarAction(Request $request)
    {
        return $this->render('ONNAesopGamesBundle:Navbar:navbar.html.twig');
    }


}
