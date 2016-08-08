<?php namespace EveningDesign\Boiler\Support;

class TableInfo {

    private $tableName;
    private $columns;

    public function __construct($tableName) {
        $this->tableName = $tableName;
        $this->columns = collect(\DB::select(\DB::raw("describe $this->tableName;")));
    }

    public function getAllColumns() {
        return $this->columns;
    }

    public function getFilteredColumns() {
        return $this->columns->reject(function($column) {
            return ($column->Field == 'id' || $column->Field == 'created_at' || $column->Field == 'updated_at');
        });
    }

}