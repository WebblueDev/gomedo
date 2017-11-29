<?php

namespace Gomedo\Repositories\Interfaces;

interface RepositoryInterface {

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function all(Array $columns = array('*'));

    public function paginate($perPage = 15, Array $columns = array('*'));

    public function find($id, Array $columns = array('*'));

    public function findBy($field, $value, Array $columns = array('*'));

    public function destroy(Array $ids);
}
