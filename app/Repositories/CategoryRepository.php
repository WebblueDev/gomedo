<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:44
 */

namespace Gomedo\Repositories;


use Gomedo\Models\Category;
use Gomedo\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository extends AbstractRepository implements CategoryRepositoryInterface
{
    function model()
    {
        return Category::class;
    }


}