<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 11/10/17
 * Time: 7:30 PM
 */

namespace Codealist\EntityModelRepository\Model;


use Codealist\EntityModelRepository\Api\Data\MyEntityInterface;
use Magento\Framework\Model\AbstractModel;

class MyEntity extends AbstractModel implements MyEntityInterface
{
    const ENTITY_ID = 'entity_id';
    const TITLE = 'title';

    protected function _construct()
    {
        $this->_init(ResourceModel\MyEntity::class);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_getData(self::TITLE);
    }

    /**
     * @param $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->setData(self::TITLE, $title);
    }
}