<?php
namespace JeeraAPI\V1\Rest\Sathish;

class SathishEntity
{
    public $id;
    public $message;
    public $status;
 
    public function getArrayCopy()
    {
        return array(
            'id'     => $this->id,
            'message' => $this->message,
            'status'  => $this->status,
        );
    }
 
    public function exchangeArray(array $array)
    {
        $this->id     = $array['id'];
        $this->message = $array['message'];
        $this->status  = $array['status'];
    }
}
