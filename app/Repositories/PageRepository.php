<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:45
 */

namespace Gomedo\Repositories;


use Gomedo\Models\Page;
use Gomedo\Repositories\Interfaces\PageRepositoryInterface;

class PageRepository extends AbstractRepository implements PageRepositoryInterface
{
    function model()
    {
        return Page::class;
    }


}