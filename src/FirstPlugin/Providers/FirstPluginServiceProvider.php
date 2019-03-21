<?php
 
namespace FirstPlugin\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
 
class FirstPluginServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
 
    public function register()
    {
      $this->getApplication()->register(FirstPluginRouteServiceProvider::class);
    }
}
