<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:47
 */

namespace Gomedo\Repositories;


use Gomedo\Models\Review;
use Gomedo\Repositories\Interfaces\ReviewRepositoryInterface;

class ReviewRepository extends AbstractRepository implements  ReviewRepositoryInterface
{
    function model()
    {
        return Review::class;
    }


}