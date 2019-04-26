<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseService
{
    /**
     * Fetch page object by table's name , page size, searching info ,and ordering info;
     *
     * $modelClass : The  Class Name of eloquent model.
     * Page Info : page num and page size.
     * Filter Columns : Key : column's name, Value : filter value.
     * Search Columns :  Key : column's name, Value : search value
     * Order Columns : Key : column's name, Value : ordering type ("asc", or "desc")
     * Eager Loading : Eager Loading attributes;
     *
     * @param $modelClass
     * @param array $pageInfo
     * @param array $filterColumn
     * @param array $orderColumn
     * @param array $searchColumn
     * @param array $eagerLoading
     * @param array $scopes
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|Collection
     */
    public function fetch($modelClass, $pageInfo = [], $filterColumn = [], $orderColumn = [], $searchColumn = [], $eagerLoading = [], $scopes = []);

    /**
     * Fetch Model by id.
     * Eager Loading : Eager Loading attributes;
     *
     * @param $modelClass
     * @param $id
     * @param array $eagerLoading
     * @return Model
     */
    public function retrieve($modelClass, $id, $eagerLoading = []);

    /**
     * Create a new model(Persistence data).
     *
     * @param $modelClass
     * @param $data
     * @return Model
     */
    public function create($modelClass, $data);

    /**
     * Update model by id.
     * $data : attributes which should be updated.
     *
     * @param $modelClass
     * @param $id
     * @param $data
     * @return Model
     */
    public function update($modelClass, $id, $data);

    /**
     * Delete the model by id.
     *
     * @param $modelClass
     * @param $id
     */
    public function delete($modelClass, $id);
}