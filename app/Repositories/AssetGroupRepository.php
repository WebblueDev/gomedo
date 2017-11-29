<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:44
 */

namespace Gomedo\Repositories;


use Gomedo\Models\AssetGroup;
use Gomedo\Repositories\Interfaces\AssetGroupRepositoryInterface;

class AssetGroupRepository extends AbstractRepository implements AssetGroupRepositoryInterface
{
    function model()
    {
        return AssetGroup::class;
    }

}