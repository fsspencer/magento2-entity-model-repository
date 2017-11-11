<?php

namespace Codealist\EntityModelRepository\Model;


use Codealist\EntityModelRepository\Api\Data\MyEntitySearchResultInterfaceFactory;
use Codealist\EntityModelRepository\Api\MyEntityRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;


class MyEntityRepository extends AbstractRepository implements MyEntityRepositoryInterface
{
    public function __construct(
        MyEntityFactory $myEntityFactory,
        MyEntitySearchResultInterfaceFactory $searchResultFactory,
        ResourceModel\MyEntity\CollectionFactory $myEntityCollectionFactory
    )
    {
        $this->myEntityFactory = $myEntityFactory;
        $this->searchResultFactory = $searchResultFactory;
        $this->myEntityCollectionFactory = $myEntityCollectionFactory;
    }

    /**
     * @param \Codealist\EntityModelRepository\Api\Data\MyEntityInterface $myEntity
     * @return \Codealist\EntityModelRepository\Api\Data\MyEntityInterface
     */
    public function save(\Codealist\EntityModelRepository\Api\Data\MyEntityInterface $myEntity)
    {
        $myEntity->getResource()->save($myEntity);
        return $myEntity;
    }

    /**
     * @param \Codealist\EntityModelRepository\Api\Data\MyEntityInterface $myEntity
     * @return \Codealist\EntityModelRepository\Api\Data\MyEntityInterface
     */
    public function delete(\Codealist\EntityModelRepository\Api\Data\MyEntityInterface $myEntity)
    {
        $myEntity->getResource()->delete($myEntity);
    }

    /**
     * @param int $id
     * @return \Codealist\EntityModelRepository\Api\Data\MyEntityInterface
     * @throws NoSuchEntityException
     */
    public function getById($id)
    {
        $obj = $this->myEntityFactory->create();
        $obj->getResource()->load($obj, $id);
        if (! $obj->getId()) {
            throw new NoSuchEntityException(__('Unable to find My Entity with ID "%1"', $id));
        }
        return $obj;
    }

    /**
     * @param int $id
     * @return void
     */
    public function deleteById($id)
    {
        $obj = $this->getById($id);
        $obj->delete();
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Codealist\EntityModelRepository\Api\Data\MyEntitySearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->myEntityCollectionFactory->create();
        $searchResults = $this->searchResultFactory->create();

        $this->addFiltersToCollection($searchCriteria, $collection);
        $this->addSortOrdersToCollection($searchCriteria, $collection);
        $this->addPagingToCollection($searchCriteria, $collection);

        $collection->load();

        return $this->buildSearchResult($searchCriteria, $collection, $searchResults);
    }


}