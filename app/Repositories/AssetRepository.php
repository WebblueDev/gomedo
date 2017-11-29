<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:44
 */

namespace Gomedo\Repositories;


use Gomedo\Models\Asset;
use Gomedo\Repositories\Interfaces\AssetRepositoryInterface;

class AssetRepository extends AbstractRepository implements AssetRepositoryInterface
{
    function model()
    {
        return Asset::class;
    }

}