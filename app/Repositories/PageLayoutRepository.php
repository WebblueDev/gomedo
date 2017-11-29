<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:45
 */

namespace Gomedo\Repositories;


use Gomedo\Models\PageLayout;
use Gomedo\Repositories\Interfaces\PageLayoutRepositoryInterface;

class PageLayoutRepository extends AbstractRepository implements PageLayoutRepositoryInterface
{
    function model()
    {
        return PageLayout::class;
    }


}