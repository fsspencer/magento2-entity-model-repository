<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 11/11/17
 * Time: 12:43 AM
 */

namespace Codealist\EntityModelRepository\Model;


use Codealist\EntityModelRepository\Api\Data\MyEntitySearchResultInterface;
use Magento\Framework\Api\SearchResults;

class MyEntitySearchResult extends SearchResults implements MyEntitySearchResultInterface
{

}