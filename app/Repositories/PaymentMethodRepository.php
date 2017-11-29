<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 15:45
 */

namespace Gomedo\Repositories;

use Gomedo\Models\PaymentMethod;
use Gomedo\Repositories\Interfaces\PaymentMethodRepositoryInterface;

class PaymentMethodRepository extends AbstractRepository implements PaymentMethodRepositoryInterface
{
    function model()
    {
        return PaymentMethod::class;
    }


}