<?php

namespace Codealist\EntityModelRepository\Api;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface MyEntityRepositoryInterface
 * @package Codealist\EntityModelRepository\Api
 */
interface MyEntityRepositoryInterface
{
    /**
     * @param \Codealist\EntityModelRepository\Api\Data\MyEntityInterface $myEntity
     * @return \Codealist\EntityModelRepository\Api\Data\MyEntityInterface
     */
    public function save(\Codealist\EntityModelRepository\Api\Data\MyEntityInterface $myEntity);

    /**
     * @param \Codealist\EntityModelRepository\Api\Data\MyEntityInterface $myEntity
     * @return \Codealist\EntityModelRepository\Api\Data\MyEntityInterface
     */
    public function delete(\Codealist\EntityModelRepository\Api\Data\MyEntityInterface $myEntity);

    /**
     * @param SearchCriteriaInterface $criteria
     * @return \Codealist\EntityModelRepository\Api\Data\MyEntitySearchResultInterface
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function deleteById($id);
}