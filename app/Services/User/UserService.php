<?php
/**
 * Created by PhpStorm.
 * User: Andi
 * Date: 29.11.2017
 * Time: 16:08
 */

namespace Gomedo\Services\User;

use Gomedo\Repositories\UserRepository;

class UserService
{
    private $users;

    public function __construct(UserRepository $users)
    {
        $this->$users = $users;
    }

}