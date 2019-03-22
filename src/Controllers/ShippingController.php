<?php
namespace FirstPlugin\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class ShippingController extends Controller
{
    private $config;
    private $twig;
    
    public function __construct(ConfigRepository $config, Twig $twig)
    {
        $this->config = $config;
	$this->twig = $twig;
    }
    /**
	 * @param Twig $twig
	 * @return string
	 */
    public function configValues()
	{
		return $this->twig->render('FirstPlugin::content.first', array('configValuess' =>$this->config));
	}
}
