<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:48
 */

namespace Gomedo\Repositories;


use Gomedo\Models\Video;
use Gomedo\Repositories\Interfaces\VideoRepositoryInterface;

class VideoRepository extends AbstractRepository implements VideoRepositoryInterface
{
    function model()
    {
        Video::class;
    }

}