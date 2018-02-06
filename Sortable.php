<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 06/02/18
 * Time: 10:31
 */

namespace MyNamespace;

trait Sortable
{

    protected $sortableColumns   = [];

    public function scopeSortable($query)
    {
        $data = \Request::all();
        if (empty($data)) return;

        $sortableColumn = array_get($data, 's', null);
        if (empty($sortableColumn) || !in_array($sortableColumn, $this->sortableColumns)) return;

        $direction = array_get($data, 'd', null);

        return $query->orderBy($sortableColumn, (!empty($direction)) ? $direction : 'desc');
    }

}