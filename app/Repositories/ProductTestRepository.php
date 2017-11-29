<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:47
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ProductTest;
use Gomedo\Repositories\Interfaces\ProductTestRepositoryInterface;

class ProductTestRepository extends AbstractRepository implements ProductTestRepositoryInterface
{
    function model()
    {
        return ProductTest::class;
    }


}