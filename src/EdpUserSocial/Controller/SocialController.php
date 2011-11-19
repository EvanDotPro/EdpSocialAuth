<?php

namespace EdpUserSocial\Controller;

use Zend\Mvc\Controller\ActionController;

class SocialController extends ActionController
{
    protected $endpointPath;

    public function __construct($endpointPath)
    {
        $this->endpointPath = $endpointPath;
    }

    public function endpointAction()
    {
        require_once $this->endpointPath;
    }

    public function loginAction()
    {

    }
}
