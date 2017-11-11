<?php

namespace Codealist\EntityModelRepository\Api\Data;


use Magento\Framework\Data\SearchResultInterface;

interface MyEntitySearchResultInterface extends SearchResultInterface
{
    /**
     * @return \Codealist\EntityModelRepository\Api\Data\MyEntityInterface[]
     */
    public function getItems();

    /**
     * @param \Codealist\EntityModelRepository\Api\Data\MyEntityInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}