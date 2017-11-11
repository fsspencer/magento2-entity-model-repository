<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 11/10/17
 * Time: 7:49 PM
 */

namespace Codealist\EntityModelRepository\Api\Data;


use Magento\Framework\Api\ExtensibleDataInterface;

interface MyEntityInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param $id
     * @return void
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param $title
     * @return void
     */
    public function setTitle($title);
}