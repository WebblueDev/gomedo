<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:44
 */

namespace Gomedo\Repositories;


use Gomedo\Models\ImageTransform;
use Gomedo\Repositories\Interfaces\ImageRepositoryInterface;

class ImageRepository extends AbstractRepository implements ImageRepositoryInterface
{
    function model()
    {
        return ImageTransform::class;
    }


}