<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:46
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ProductGroup;
use Gomedo\Repositories\Interfaces\ProductGroupRepositoryInterface;

class ProductGroupRepository extends AbstractRepository implements ProductGroupRepositoryInterface
{
    function model()
    {
        return ProductGroup::class;
    }


}