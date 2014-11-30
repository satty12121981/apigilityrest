<?php
namespace JeeraAPI;

use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
	 return array(
	    'factories' => array(
	      'JeeraAPI\V1\Rest\Sathish\SathishMapper' =>  function ($sm) {
		$adapter = $sm->get('Zend\Db\Adapter\Adapter');
		return new \JeeraAPI\V1\Rest\Sathish\SathishMapper($adapter);
	      },
	    ),
	 );
   }

}
