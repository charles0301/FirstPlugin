<?php
 
namespace FirstPlugin\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class FirstPluginRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
       $router->get('config','FirstPlugin\Controllers\ShippingController@configValues');
    }
}
