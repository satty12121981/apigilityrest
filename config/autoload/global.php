<?php
return array(
    'zf-mvc-auth' => array(
        'authentication' => array(),
    ),
    'db' => array(
        'adapters' => array(
            'DB\\Jeera' => array(),
        ),
    ),
    'router' => array(
        'routes' => array(
            'oauth' => array(
                'options' => array(
                    'route' => '/authtest',
                ),
            ),
        ),
    ),
);
