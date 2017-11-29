<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:44
 */

namespace Gomedo\Repositories;


use Gomedo\Models\Entity;
use Gomedo\Repositories\Interfaces\EntityRepositoryInterface;

class EntityRepository extends AbstractRepository implements EntityRepositoryInterface
{
    function model()
    {
        return Entity::class;
    }


}