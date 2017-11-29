<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:48
 */

namespace Gomedo\Repositories;


use Gomedo\Models\UserProductList;
use Gomedo\Repositories\Interfaces\UserProductListRepositoryInterface;

class UserProductListRepository extends AbstractRepository implements UserProductListRepositoryInterface
{
    function model()
    {
        return UserProductList::class;
    }


}