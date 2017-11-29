<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:45
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ImageTransform;
use Gomedo\Repositories\Interfaces\ImageTransformRepositoryInterface;

class ImageTransformRepository extends AbstractRepository implements ImageTransformRepositoryInterface
{
    function model()
    {
        return ImageTransform::class;
    }

}