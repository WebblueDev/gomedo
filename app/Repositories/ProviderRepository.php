<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:47
 */

namespace Gomedo\Repositories;


use Gomedo\Models\Provider;
use Gomedo\Repositories\Interfaces\ProviderRepositoryInterface;

class ProviderRepository extends AbstractRepository implements ProviderRepositoryInterface
{
    function model()
    {
        return Provider::class;
    }


}