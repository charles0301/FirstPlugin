<?php
namespace Wallee\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;

class PaymentNotificationController extends Controller
{
    private $request;

    /**
     *
     * @var Response
     */
    private $response;

    /**
     *
     * @var ConfigRepository
     */
    private $config;

    /**
     * PaymentController constructor.
     *
     */
    public function __construct(Request $request, Response $response, ConfigRepository $config)
    {
        $this->request = $request;
        $this->response = $response;
        $this->config = $config;
        echo"<pre>";print_r($this->config);exit;
    }
}
