<?php
return array(
    'controllers' => array(
        'factories' => array(
            'JeeraAPI\\V1\\Rpc\\Ping\\Controller' => 'JeeraAPI\\V1\\Rpc\\Ping\\PingControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'jeera-api.rpc.ping' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => 'ping',
                    'defaults' => array(
                        'controller' => 'JeeraAPI\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ),
                ),
            ),
            'jeera-api.rest.sathish' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/sathish[/:sathish_id]',
                    'defaults' => array(
                        'controller' => 'JeeraAPI\\V1\\Rest\\Sathish\\Controller',
                    ),
                ),
            ),
            'jeera-api.rest.test' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/test[/:test_id]',
                    'defaults' => array(
                        'controller' => 'JeeraAPI\\V1\\Rest\\Test\\Controller',
                    ),
                ),
            ),
            'jeera-api.rest.album' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/album[/:album_id]',
                    'defaults' => array(
                        'controller' => 'JeeraAPI\\V1\\Rest\\Album\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'jeera-api.rpc.ping',
            1 => 'jeera-api.rest.sathish',
            2 => 'jeera-api.rest.test',
            3 => 'jeera-api.rest.album',
        ),
    ),
    'zf-rpc' => array(
        'JeeraAPI\\V1\\Rpc\\Ping\\Controller' => array(
            'service_name' => 'ping',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'jeera-api.rpc.ping',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'JeeraAPI\\V1\\Rpc\\Ping\\Controller' => 'Json',
            'JeeraAPI\\V1\\Rest\\Sathish\\Controller' => 'HalJson',
            'JeeraAPI\\V1\\Rest\\Test\\Controller' => 'HalJson',
            'JeeraAPI\\V1\\Rest\\Album\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'JeeraAPI\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.jeera-api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'JeeraAPI\\V1\\Rest\\Sathish\\Controller' => array(
                0 => 'application/vnd.jeera-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'JeeraAPI\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.jeera-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'JeeraAPI\\V1\\Rest\\Album\\Controller' => array(
                0 => 'application/vnd.jeera-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'JeeraAPI\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.jeera-api.v1+json',
                1 => 'application/json',
            ),
            'JeeraAPI\\V1\\Rest\\Sathish\\Controller' => array(
                0 => 'application/vnd.jeera-api.v1+json',
                1 => 'application/json',
            ),
            'JeeraAPI\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.jeera-api.v1+json',
                1 => 'application/json',
            ),
            'JeeraAPI\\V1\\Rest\\Album\\Controller' => array(
                0 => 'application/vnd.jeera-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'JeeraAPI\\V1\\Rpc\\Ping\\Controller' => array(
            'input_filter' => 'JeeraAPI\\V1\\Rpc\\Ping\\Validator',
        ),
        'JeeraAPI\\V1\\Rest\\Sathish\\Controller' => array(
            'input_filter' => 'JeeraAPI\\V1\\Rest\\Sathish\\Validator',
        ),
        'JeeraAPI\\V1\\Rest\\Album\\Controller' => array(
            'input_filter' => 'JeeraAPI\\V1\\Rest\\Album\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'JeeraAPI\\V1\\Rpc\\JeeraRPC\\Validator' => array(
            0 => array(
                'name' => 'userid',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'userid test field',
            ),
        ),
        'JeeraAPI\\V1\\Rpc\\Ping\\Validator' => array(
            0 => array(
                'name' => 'ack',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'ack description',
            ),
        ),
        'JeeraAPI\\V1\\Rest\\Sathish\\Validator' => array(
            0 => array(
                'name' => 'message',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'message desc',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            1 => array(
                'name' => 'status',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'allow_empty' => false,
                'continue_if_empty' => false,
                'description' => 'Status desc',
            ),
        ),
        'JeeraAPI\\V1\\Rest\\Album\\Validator' => array(
            0 => array(
                'name' => 'artist',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'here the author name comes',
            ),
            1 => array(
                'name' => 'title',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'her e the album title',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'JeeraAPI\\V1\\Rpc\\Ping\\Controller' => array(
                'actions' => array(
                    'ping' => array(
                        'GET' => true,
                        'POST' => false,
                        'PATCH' => false,
                        'PUT' => false,
                        'DELETE' => false,
                    ),
                ),
            ),
            'JeeraAPI\\V1\\Rest\\Sathish\\Controller' => array(
                'entity' => array(
                    'GET' => true,
                    'POST' => false,
                    'PATCH' => true,
                    'PUT' => true,
                    'DELETE' => true,
                ),
                'collection' => array(
                    'GET' => true,
                    'POST' => true,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'JeeraAPI\\V1\\Rest\\Sathish\\SathishResource' => 'JeeraAPI\\V1\\Rest\\Sathish\\SathishResourceFactory',
            'JeeraAPI\\V1\\Rest\\Test\\TestResource' => 'JeeraAPI\\V1\\Rest\\Test\\TestResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'JeeraAPI\\V1\\Rest\\Sathish\\Controller' => array(
            'listener' => 'JeeraAPI\\V1\\Rest\\Sathish\\SathishResource',
            'route_name' => 'jeera-api.rest.sathish',
            'route_identifier_name' => 'sathish_id',
            'collection_name' => 'sathish',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'JeeraAPI\\V1\\Rest\\Sathish\\SathishEntity',
            'collection_class' => 'JeeraAPI\\V1\\Rest\\Sathish\\SathishCollection',
            'service_name' => 'sathish',
        ),
        'JeeraAPI\\V1\\Rest\\Test\\Controller' => array(
            'listener' => 'JeeraAPI\\V1\\Rest\\Test\\TestResource',
            'route_name' => 'jeera-api.rest.test',
            'route_identifier_name' => 'test_id',
            'collection_name' => 'test',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'JeeraAPI\\V1\\Rest\\Test\\TestEntity',
            'collection_class' => 'JeeraAPI\\V1\\Rest\\Test\\TestCollection',
            'service_name' => 'test',
        ),
        'JeeraAPI\\V1\\Rest\\Album\\Controller' => array(
            'listener' => 'JeeraAPI\\V1\\Rest\\Album\\AlbumResource',
            'route_name' => 'jeera-api.rest.album',
            'route_identifier_name' => 'album_id',
            'collection_name' => 'album',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'JeeraAPI\\V1\\Rest\\Album\\AlbumEntity',
            'collection_class' => 'JeeraAPI\\V1\\Rest\\Album\\AlbumCollection',
            'service_name' => 'album',
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'JeeraAPI\\V1\\Rest\\Sathish\\SathishEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'jeera-api.rest.sathish',
                'route_identifier_name' => 'sathish_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'JeeraAPI\\V1\\Rest\\Sathish\\SathishCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'jeera-api.rest.sathish',
                'route_identifier_name' => 'sathish_id',
                'is_collection' => true,
            ),
            'JeeraAPI\\V1\\Rest\\Test\\TestEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'jeera-api.rest.test',
                'route_identifier_name' => 'test_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'JeeraAPI\\V1\\Rest\\Test\\TestCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'jeera-api.rest.test',
                'route_identifier_name' => 'test_id',
                'is_collection' => true,
            ),
            'JeeraAPI\\V1\\Rest\\Album\\AlbumEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'jeera-api.rest.album',
                'route_identifier_name' => 'album_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'JeeraAPI\\V1\\Rest\\Album\\AlbumCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'jeera-api.rest.album',
                'route_identifier_name' => 'album_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'JeeraAPI\\V1\\Rest\\Album\\AlbumResource' => array(
                'adapter_name' => 'DB\\Jeera',
                'table_name' => 'album',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'JeeraAPI\\V1\\Rest\\Album\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
);
