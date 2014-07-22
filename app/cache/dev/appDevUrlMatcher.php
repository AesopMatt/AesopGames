<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js/ac02054')) {
            // _assetic_ac02054
            if ($pathinfo === '/js/ac02054.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ac02054',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ac02054',);
            }

            if (0 === strpos($pathinfo, '/js/ac02054_')) {
                // _assetic_ac02054_0
                if ($pathinfo === '/js/ac02054_jquery-1.8.0.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ac02054',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ac02054_0',);
                }

                // _assetic_ac02054_1
                if ($pathinfo === '/js/ac02054_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ac02054',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ac02054_1',);
                }

                if (0 === strpos($pathinfo, '/js/ac02054_part_3_')) {
                    // _assetic_ac02054_2
                    if ($pathinfo === '/js/ac02054_part_3_bootstrap_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ac02054',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ac02054_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/ac02054_part_3_jquery')) {
                        // _assetic_ac02054_3
                        if ($pathinfo === '/js/ac02054_part_3_jquery-ui-1.10.3.custom_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ac02054',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ac02054_3',);
                        }

                        // _assetic_ac02054_4
                        if ($pathinfo === '/js/ac02054_part_3_jquery.backstretch.min_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ac02054',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ac02054_4',);
                        }

                    }

                }

            }

        }

        // _assetic_7dace82
        if ($pathinfo === '/css/7dace82.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '7dace82',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7dace82',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
