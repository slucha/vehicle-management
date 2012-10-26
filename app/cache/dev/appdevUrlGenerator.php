<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       '_homepage' => true,
       'VehicleManagementChartBundle_main' => true,
       'VehicleManagementChartBundle_data_retrieve' => true,
       'VehicleManagementManagementBundle_refuel' => true,
       'VehicleManagementManagementBundle_refuel_edit' => true,
       'VehicleManagementManagementBundle_refuel_add' => true,
       'VehicleManagementManagementBundle_refuel_delete' => true,
       'VehicleManagementManagementBundle_vehicle' => true,
       'VehicleManagementManagementBundle_vehicle_edit' => true,
       'VehicleManagementManagementBundle_vehicle_add' => true,
       'VehicleManagementManagementBundle_vehicle_delete' => true,
       'VehicleManagementManagementBundle_servicing' => true,
       'VehicleManagementManagementBundle_servicing_edit' => true,
       'VehicleManagementManagementBundle_servicing_add' => true,
       'VehicleManagementManagementBundle_servicing_delete' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function get_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\HomepageController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getVehicleManagementChartBundle_mainRouteInfo()
    {
        return array(array (), array (  '_controller' => 'VehicleManagement\\ChartBundle\\Controller\\MainController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/charts/',  ),));
    }

    private function getVehicleManagementChartBundle_data_retrieveRouteInfo()
    {
        return array(array (  0 => 'year',), array (  '_controller' => 'VehicleManagement\\ChartBundle\\Controller\\DataController::retrieveAction',), array (  'id' => '\\d{4}',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'year',  ),  1 =>   array (    0 => 'text',    1 => '/charts/data/retrieve',  ),));
    }

    private function getVehicleManagementManagementBundle_refuelRouteInfo()
    {
        return array(array (  0 => 'page',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\RefuelController::indexAction',  'page' => 1,), array (  'page' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '/management/refuel',  ),));
    }

    private function getVehicleManagementManagementBundle_refuel_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\RefuelController::editAction',), array (  'id' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/management/refuel/edit',  ),));
    }

    private function getVehicleManagementManagementBundle_refuel_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\RefuelController::addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/management/refuel/add',  ),));
    }

    private function getVehicleManagementManagementBundle_refuel_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\RefuelController::deleteAction',), array (  'id' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/management/refuel/delete',  ),));
    }

    private function getVehicleManagementManagementBundle_vehicleRouteInfo()
    {
        return array(array (  0 => 'page',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\VehicleController::indexAction',  'page' => 1,), array (  'page' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '/management/vehicle',  ),));
    }

    private function getVehicleManagementManagementBundle_vehicle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\VehicleController::editAction',), array (  'id' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/management/vehicle/edit',  ),));
    }

    private function getVehicleManagementManagementBundle_vehicle_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\VehicleController::addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/management/vehicle/add',  ),));
    }

    private function getVehicleManagementManagementBundle_vehicle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\VehicleController::deleteAction',), array (  'id' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/management/vehicle/delete',  ),));
    }

    private function getVehicleManagementManagementBundle_servicingRouteInfo()
    {
        return array(array (  0 => 'page',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\ServicingController::indexAction',  'page' => 1,), array (  'page' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'page',  ),  1 =>   array (    0 => 'text',    1 => '/management/servicing',  ),));
    }

    private function getVehicleManagementManagementBundle_servicing_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\ServicingController::editAction',), array (  'id' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/management/servicing/edit',  ),));
    }

    private function getVehicleManagementManagementBundle_servicing_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\ServicingController::addAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/management/servicing/add',  ),));
    }

    private function getVehicleManagementManagementBundle_servicing_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'VehicleManagement\\ManagementBundle\\Controller\\ServicingController::deleteAction',), array (  'id' => '\\d*',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d*',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/management/servicing/delete',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/change-password/change-password',  ),));
    }
}
