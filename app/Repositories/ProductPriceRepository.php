<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:46
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ProductPrice;
use Gomedo\Repositories\Interfaces\ProductPriceRepositoryInterface;

class ProductPriceRepository extends AbstractRepository implements ProductPriceRepositoryInterface
{
    function model()
    {
        return ProductPrice::class;
    }


}