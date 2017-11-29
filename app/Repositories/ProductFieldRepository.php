<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:46
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ProductField;
use Gomedo\Repositories\Interfaces\ProductFieldRepositoryInterface;

class ProductFieldRepository extends AbstractRepository implements ProductFieldRepositoryInterface
{
    function model()
    {
        return ProductField::class;
    }


}