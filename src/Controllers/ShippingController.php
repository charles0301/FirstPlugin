<?php
namespace FirstPlugin\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;
use Plenty\Plugin\Templates\Twig;

class ShippingController extends Controller
{
    private $request;
    private $response;
    private $config;
    
    public function __construct(Request $request, Response $response, ConfigRepository $config)
    {
        $this->request = $request;
        $this->response = $response;
        $this->config = $config;
    }
    
    public function configValues()
	{
           return $twig->render('FirstPlugin::content.first');
	}
}
