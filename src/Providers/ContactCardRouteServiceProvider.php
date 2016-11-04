<?php

namespace ContactCard\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class ContactCardRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('contact-card','ContactCard\Controllers\ContentController@renderContactCard');
    }
}