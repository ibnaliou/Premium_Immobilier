<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // premium_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'premium_homepage');
            }

            return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'premium_homepage',);
        }

        // acceuil
        if ('/acceuil' === $pathinfo) {
            return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::searchBienAction',  '_route' => 'acceuil',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // list_bien
            if ('/admin/bien/list' === $pathinfo) {
                return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::listBienAction',  '_route' => 'list_bien',);
            }

            if (0 === strpos($pathinfo, '/admin/reservation')) {
                // list_reservation
                if ('/admin/reservation' === $pathinfo) {
                    return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::listReservationAction',  '_route' => 'list_reservation',);
                }

                // reservation_info
                if ('/admin/reservations' === $pathinfo) {
                    return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::reservationInfoAction',  '_route' => 'reservation_info',);
                }

                // contrat_reservation
                if ('/admin/reservation/contrat' === $pathinfo) {
                    return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::contratReservationAction',  '_route' => 'contrat_reservation',);
                }

                // print_reservation
                if ('/admin/reservation/print' === $pathinfo) {
                    return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::printContratAction',  '_route' => 'print_reservation',);
                }

                // list_reservationPro
                if ('/admin/reservationpro' === $pathinfo) {
                    return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::proreservationAction',  '_route' => 'list_reservationPro',);
                }

            }

            elseif (0 === strpos($pathinfo, '/administrator')) {
                // administrator
                if ('/administrator' === $pathinfo) {
                    return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::adminAction',  '_route' => 'administrator',);
                }

                // formbien
                if ('/administrator/bien' === $pathinfo) {
                    return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::formbienAction',  '_route' => 'formbien',);
                }

            }

            // dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'DiamontBundle:Admin:dashboard',  '_route' => 'dashboard',);
            }

            // Calendar
            if ('/admin/Calendar' === $pathinfo) {
                return array (  '_controller' => 'DiamontBundle:Admin:Calendar',  '_route' => 'Calendar',);
            }

            // list_reservePro
            if ('/admin/listreservation' === $pathinfo) {
                return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::reserverAction',  '_route' => 'list_reservePro',);
            }

            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        elseif (0 === strpos($pathinfo, '/front/bien')) {
            // search_bien
            if ('/front/bien/search' === $pathinfo) {
                return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::searchBienAction',  '_route' => 'search_bien',);
            }

            // reserver_bien
            if ('/front/bien/reserver' === $pathinfo) {
                return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::reserverBienAction',  '_route' => 'reserver_bien',);
            }

            // catalogue
            if ('/front/bien/catalogue' === $pathinfo) {
                return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::catalogueBienAction',  '_route' => 'catalogue',);
            }

            // confier
            if ('/front/bien/proprietaire' === $pathinfo) {
                return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::confieBienAction',  '_route' => 'confier',);
            }

        }

        // login_admin
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::loginAction',  '_route' => 'login_admin',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
