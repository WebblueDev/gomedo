<?php

namespace Gomedo\Repositories;

use Gomedo\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Container\Container as App;

abstract class AbstractRepository implements RepositoryInterface {

    private $app;
    protected $model;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    abstract function model();

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes, $attribute="id")
    {
        return $this->model->where($attribute, '=', $id)->update($attributes);
    }

    public function all(Array $columns = array('*'))
    {
        return $this->model->get($columns);
    }

    public function paginate($perPage = 15, Array $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns);
    }

    public function find($id, Array $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    public function findBy($field, $value, Array $columns = array('*'))
    {
        return $this->model->where($field, '=', $value)->get($columns);
    }

    public function findOneBy($field, $value, Array $columns = array('*'))
    {
        return $this->model->where($field, '=', $value)->first($columns);
    }

    public function destroy(Array $ids)
    {
        return $this->model->destroy($ids);
    }

    public function makeModel() {
        $model = $this->app->make($this->model());

        return $this->model = $model->newQuery();
    }

}