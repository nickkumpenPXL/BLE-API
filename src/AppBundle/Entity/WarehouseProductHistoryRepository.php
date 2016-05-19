<?php

namespace AppBundle\Entity;

/**
 * WarehouseProductHistoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class WarehouseProductHistoryRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param Warehouse $warehouse
     * @param Product $product
     * @return null|object
     */
    public function findLastRecordOfProductInWarehouse(Warehouse $warehouse, Product $product)
    {
        return $this->findOneBy(array('warehouse' => $warehouse, 'product' => $product), array('time' => 'DESC'));
    }
    
}
