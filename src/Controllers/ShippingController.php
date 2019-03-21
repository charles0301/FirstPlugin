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
    
    public function __construct(Request $request, Response $response, ConfigRepository $config, Twig $twig)
    {
        $this->request = $request;
        $this->response = $response;
        $this->config = $config;
	$this->twig = $twig;
    }
    
    public function configValues()
	{
           return $this->twig->render('FirstPlugin::content.first',array('formData'=> 'hii'));
	}
}
