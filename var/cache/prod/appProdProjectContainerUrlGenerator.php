<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'premium_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acceuil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::searchBienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acceuil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'search_bien' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::searchBienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/front/bien/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserver_bien' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::reserverBienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/front/bien/reserver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'catalogue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\FrontController::catalogueBienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/front/bien/catalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_bien' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::listBienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/bien/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_reservation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::listReservationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_info' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::reservationInfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reservations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat_reservation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::contratReservationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reservation/contrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'print_reservation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::printContratAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reservation/print',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'administrator' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administrator',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DiamontBundle:Admin:dashboard',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Calendar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DiamontBundle:Admin:Calendar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/Calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'formbien' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PI\\Premium_ImmobilierBundle\\Controller\\AdminController::formbienAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/administrator/bien',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'easyadmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
