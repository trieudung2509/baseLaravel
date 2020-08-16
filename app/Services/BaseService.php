<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;

abstract class BaseService
{
    protected $_model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function model();

    public function setModel($class = "")
    {
        $this->_model = $class ? app()->make(
            $class
        ) : app()->make(
            $this->model()
        );
    }

    public function all()
    {
        return $this->_model->all();
    }

    public function find($id)
    {
        $result = $this->_model->find($id);
        return $result;
    }

    public function findOrFail($id)
    {
        $result = $this->_model->findOrFail($id);
        return $result;
    }

    public function findBy($field, $value)
    {
        return $this->_model->where($field, $value)->get()->first();
    }

    public function where(array $where, $relations = [])
    {
        foreach ($where as $field => $value) {
            $this->_model = is_numeric($field) ? $this->_model->where([$value]) : $this->_model->where($field, $value);
        }
        return $relations ? $this->_model->with($relations) : $this->_model;
    }

    public function whereIn(array $whereIn, $relations = [])
    {
        foreach ($whereIn as $field => $value) {
            $this->_model = $this->_model->whereIn($field, $value);
        }
        return $relations ? $this->_model->with($relations) : $this->_model;
    }

    public function whereBetween(array $whereBetween)
    {
        foreach ($whereBetween as $field => $value) {
            $this->_model = $this->_model->whereBetween($field, $value);
        }
        return $this->_model;
    }

    public function with($relations)
    {
        return $this->_model->with($relations);
    }

    public function orderBy($field, $direction = null)
    {
        $direction = strtolower($direction) == 'desc' ? 'desc' : 'asc';
        return $this->_model->orderBy($field, $direction);
    }

    public function paginate($number)
    {
        return $this->_model->paginate($number);
    }

    public function create(array $attributes)
    {
        return $this->_model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }

    public function arrayPaginator($request, $array, $perPage)
    {
        $page = Input::get('page', 1);

        $array = $array instanceof Collection ? $array : Collection::make($array);
        $totalPage = max((int) ceil($array->count() / $perPage), 1);

        if ($page > $totalPage) {
            abort(404);
        }

        return new LengthAwarePaginator($array->forPage((int)$page, $perPage), $array->count(), $perPage, (int)$page,
            ['path' => $request->url(), 'query' => $request->query()]);
    }
}
