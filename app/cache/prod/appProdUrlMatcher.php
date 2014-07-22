<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::indexAction',  '_route' => 'index',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::aboutAction',  '_route' => 'about',);
        }

        // games
        if ($pathinfo === '/games') {
            return array (  '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::gamesAction',  '_route' => 'games',);
        }

        // blog
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::blogAction',  '_route' => 'blog',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::contactAction',  '_route' => 'contact',);
        }

        // support
        if ($pathinfo === '/support') {
            return array (  '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::supportAction',  '_route' => 'support',);
        }

        // navbar
        if ($pathinfo === '/navbar') {
            return array (  '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::navbarAction',  '_route' => 'navbar',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
