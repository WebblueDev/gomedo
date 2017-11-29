<?php

namespace Gomedo\Repositories\Interfaces;

interface UserRepositoryInterface extends RepositoryInterface {

    public function findByName($name);
}