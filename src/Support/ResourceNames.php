<?php namespace EveningDesign\Boiler\Support;

class ResourceNames {

    private $originalName;
    private $result;

    public function __construct($resourceName) {
        $this->originalName = $resourceName;
        $this->reset();
    }

    public function singular() {
        $this->result = str_singular($this->result);
        return $this;
    }

    public function plural() {
        $this->result = str_plural($this->result);
        return $this;
    }

    public function studly() {
        $this->result = studly_case($this->result);
        return $this;
    }

    public function snake() {
        $this->result = snake_case($this->result);
        return $this;
    }

    public function camel() {
        $this->result = camel_case($this->result);
        return $this;
    }

    public function slug() {
        $this->result = str_slug($this->result);
        return $this;
    }

    public function get() {
        return $this->result;
    }

    public function makeColumnConstant($columnName)
    {
        return sprintf("%s::COL_%s", $this->getModelName(), strtoupper($columnName));
    }

    public function makeNamespacedColumnConstant($columnName)
    {
        return sprintf("%s::COL_%s", $this->getNamespacedModelName(), strtoupper($columnName));
    }

    public function makeWrappedColumnConstant($columnName)
    {
        return sprintf("{%s}", $this->makeColumnConstant($columnName));
    }

    public function makeWrappedNamespacedColumnConstant($columnName)
    {
        return sprintf("{%s}", $this->makeNamespacedColumnConstant($columnName));
    }

    public function getModelName() {
        $this->reset();
        return $this->singular()->studly()->get();
    }

    public function getNamespacedModelName() {
        $this->reset();
        return "\\App\\Models\\".$this->singular()->studly()->get();
    }

    public function getConstantClass() {
        $this->reset();
        return $this->singular()->studly()->get()."Constants";
    }

    public function getNamespacedConstantClass() {
        $this->reset();
        return "\\App\\Constants\\".$this->getConstantClass();
    }

    public function getRequestClass() {
        $this->reset();
        return $this->singular()->studly()->get()."Request";
    }

    public function getNamespacedRequestClass() {
        $this->reset();
        return "\\App\\Http\\Requests\\".$this->getRequestClass();
    }

    public function getControllerClass() {
        $this->reset();
        return $this->plural()->studly()->get()."Controller";
    }

    public function getSingularInstanceName($prefix = "$") {
        $this->reset();
        return $prefix.$this->singular()->camel()->get();
    }

    public function getPluralInstanceName($prefix = "$") {
        $this->reset();
        return $prefix.$this->plural()->camel()->get();
    }

    public function getViewPath() {
        $this->reset();
        return $this->slug()->get();
    }

    public function getRouteBase() {
        $this->reset();
        return $this->plural()->snake()->get();
    }

    public function reset() {
        $this->result = $this->originalName;
        return $this;
    }
}
