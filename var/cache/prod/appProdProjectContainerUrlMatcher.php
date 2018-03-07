<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
