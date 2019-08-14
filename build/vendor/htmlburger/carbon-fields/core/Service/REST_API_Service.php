<?php

namespace Progresso\Carbon_Fields\Service;

use Progresso\Carbon_Fields\REST_API\Router;
use Progresso\Carbon_Fields\REST_API\Decorator;
/*
 * Service which provides the ability to do meta queries for multi-value fields and nested fields
 */
class REST_API_Service extends \Progresso\Carbon_Fields\Service\Service
{
    /**
     * Router instance
     *
     * @var Router
     */
    protected $router;
    /**
     * Decorator instance
     *
     * @var Decorator
     */
    protected $decorator;
    /**
     * @param Router    $router
     * @param Decorator $decorator
     */
    public function __construct(\Progresso\Carbon_Fields\REST_API\Router $router, \Progresso\Carbon_Fields\REST_API\Decorator $decorator)
    {
        $this->router = $router;
        $this->decorator = $decorator;
    }
    /**
     * Enable REST API integration
     */
    protected function enabled()
    {
        add_action('progresso_carbon_fields_fields_registered', array($this, 'boot'));
    }
    /**
     * Disable REST API integration
     */
    protected function disabled()
    {
        remove_action('progresso_carbon_fields_fields_registered', array($this, 'boot'));
    }
    /**
     * Bootstrap all functionality
     */
    public function boot()
    {
        $this->router->boot();
        $this->decorator->boot();
    }
}
