<?php
namespace JeeraAPI\V1\Rest\Sathish;

 
class SathishResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('JeeraAPI\V1\Rest\Sathish\SathishMapper');
        return new SathishResource($mapper);
    }
}

