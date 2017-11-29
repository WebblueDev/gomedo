<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:47
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ProductTester;
use Gomedo\Repositories\Interfaces\ProductTesterRepositoryInterface;

class ProductTesterRepository extends AbstractRepository implements ProductTesterRepositoryInterface
{
    function model()
    {
        return ProductTester::class;
    }


}