<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:45
 */

namespace Gomedo\Repositories;


use Gomedo\Models\Path;
use Gomedo\Repositories\Interfaces\PathRepositoryInterface;

class PathRepository extends AbstractRepository implements PathRepositoryInterface
{
    function model()
    {
        return Path::class;
    }


}