<?php
return array(
    'edpusersocial' => array(
    ),
    'routes' => array(
        'edpusersocial' => array(
            'type' => 'Literal',
            'priority' => 1000,
            'options' => array(
                'route' => '/social',
                'defaults' => array(
                    'controller' => 'edpusersocial',
                ),
            ),
            'may_terminate' => true,
            'child_routes' => array(
                'endpoint' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route' => '/endpoint',
                        'defaults' => array(
                            'controller' => 'edpusersocial',
                            'action'     => 'endpoint',
                        ),
                    ),
                ),
                'login' => array(
                    'type' => 'Literal',
                    'options' => array(
                        'route' => '/login',
                        'defaults' => array(
                            'controller' => 'edpusersocial',
                            'action'     => 'login',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'di' => array(
        'instance' => array(
            'alias' => array(
                'edpusersocial' => 'EdpUserSocial\Controller\SocialController',
            ),
            'edpusersocial' => array(
                'parameters' => array(
                    'endpointPath' => __DIR__ . '/../vendors/hybridauth/hybridauth/index.php',
                ),
            ),
            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
                    'options'  => array(
                        'script_paths' => array(
                            'user' => __DIR__ . '/../views',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
