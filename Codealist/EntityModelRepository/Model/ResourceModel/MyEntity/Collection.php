<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 11/10/17
 * Time: 7:32 PM
 */

namespace Codealist\EntityModelRepository\Model\ResourceModel\MyEntity;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Codealist\EntityModelRepository\Model\MyEntity', 'Codealist\EntityModelRepository\Model\ResourceModel\MyEntity');
    }
}