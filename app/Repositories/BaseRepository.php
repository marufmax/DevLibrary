<?php

namespace App\Repositories;

use App\Contracts\BaseRepositoryContract;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryContract
{
    protected $model;

    /**
     * Repository constructor. Injecting the model
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Fetching all the records
     *
     * @return \Illuminate\Database\Eloquent\Collection|Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Creating a new record to database
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Updating a database record
     *
     * @param array $data
     * @param $id
     * @return bool
     */
    public function update(array $data, int $id)
    {
        $record = $this->show($id);

        return $record->update($data);
    }

    /**
     * Deleting a record from database
     *
     * @param $id
     * @return int
     */
    public function delete($id) : int
    {
        return $this->model->destroy($id);
    }

    /**
     * Showing a single record with the given id
     * @param $id
     * @return boolean
     */
    public function show(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get the associate model
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Setting the associate model
     *
     * @param $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Egear load database relation
     *
     * @param $relations
     * @return \Illuminate\Database\Eloquent\Builder|Model
     */
    public function with($relations)
    {
        return $this->model->with($relations);
    }
}
