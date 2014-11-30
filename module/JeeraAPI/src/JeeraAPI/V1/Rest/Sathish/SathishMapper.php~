<?php
namespace JeeraAPI\V1\Rest\Sathish;
 
use Zend\Db\Sql\Select;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Paginator\Adapter\DbSelect;
 
class SathishMapper
{
    protected $adapter;
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
 
    public function fetchAll()
    {
        $select = new Select('Sathish');
        $paginatorAdapter = new DbSelect($select, $this->adapter);
        $collection = new SathishCollection($paginatorAdapter);
        return $collection;
    }
 
    public function fetchOne($Id)
    {
        $sql = 'SELECT * FROM Sathish WHERE id = ?';
        $resultset = $this->adapter->query($sql, array($SathishId));
        $data = $resultset->toArray();
        if (!$data) {
            return false;
        }
 
        $entity = new SathishEntity();
        $entity->exchangeArray($data[0]);
        return $entity;
    }
}
