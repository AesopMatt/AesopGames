<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),),
        'games' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::gamesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/games',    ),  ),  4 =>   array (  ),),
        'blog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::blogAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'support' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::supportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/support',    ),  ),  4 =>   array (  ),),
        'navbar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ONN\\AesopGamesBundle\\Controller\\PageController::navbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/navbar',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
