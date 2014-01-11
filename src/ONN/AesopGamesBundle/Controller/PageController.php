<?php

namespace ONN\AesopGamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('ONNAesopGamesBundle:Page:index.html.twig');
    }
}
