<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:46
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ProductGroupType;
use Gomedo\Repositories\Interfaces\ProductGroupTypeRepositoryInterface;

class ProductGroupTypeRepository extends AbstractRepository implements ProductGroupTypeRepositoryInterface
{
    function model()
    {
        return ProductGroupType::class;
    }

}