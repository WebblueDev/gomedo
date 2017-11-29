<?php

namespace Gomedo\Repositories;

use Gomedo\Models\User;
use Gomedo\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface {

    function model()
    {
        return User::class;
    }

    public function findByName($name)
    {
        return $this->findBy('name', $name);
    }

}