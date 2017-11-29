<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:46
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ProductFieldData;
use Gomedo\Repositories\Interfaces\ProductFieldDataRepositoryInterface;

class ProductFieldDataRepository extends AbstractRepository implements ProductFieldDataRepositoryInterface
{
    function model()
    {
        return ProductFieldData::class;
    }


}