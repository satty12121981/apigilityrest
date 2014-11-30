<?php
return array(
    'JeeraAPI\\V1\\Rpc\\JeeraRPC\\Controller' => array(
        'GET' => array(
            'description' => 'jeera userid wil come',
            'request' => null,
            'response' => '{
   "userid": "userid test field"
}',
        ),
        'description' => 'api for ping jeera rpc',
    ),
    'JeeraAPI\\V1\\Rpc\\Ping\\Controller' => array(
        'GET' => array(
            'description' => 'desc',
            'request' => null,
            'response' => '{
   "ack": "ack description"
}',
        ),
        'description' => 'desc',
    ),
    'JeeraAPI\\V1\\Rest\\Sathish\\Controller' => array(
        'description' => 'All Sathish object wil come here',
    ),
    'JeeraAPI\\V1\\Rest\\Album\\Controller' => array(
        'description' => 'here comes the album dos',
    ),
);
