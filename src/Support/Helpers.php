<?php namespace EveningDesign\Boiler\Support;

class Helpers {

    public static function makeTemplateFilename($filename) {
        return __DIR__ . '/../templates/' .$filename;
    }

    public static function makeConstantsFilename($filename = "") {
        return app_path("Constants")."/$filename";
    }

    public static function makeHttpFilename($filename = "") {
        return app_path("Http")."/$filename";
    }

    public static function makeModelFilename($filename = "") {
        return app_path("Models")."/$filename";
    }

    public static function makeControllerFilename($filename = "") {
        return app_path("Http/Controllers")."/$filename";
    }

    public static function makeRequestsFilename($filename = "") {
        return app_path("Http/Requests")."/$filename";
    }

    public static function makeViewsFilename($filename = "") {
        return base_path("resources/views")."/$filename";
    }

    public static function makeRoutesFilename($filename = "") {
        return base_path("routes")."/$filename";
    }

    public static function ensureDirectory($directory) {
        if(!file_exists($directory)) {
            mkdir($directory);
        }
    }

    public static function makeHumanFriendly($text) {
        return ucwords(str_replace("_", " ", snake_case($text)));
    }

    public static function getLayout()
    {
        return config('boiler.extends-directive');
    }

    public static function getContentSection()
    {
        return config('boiler.content-section-directive');
    }

    public static function getHeading()
    {
        return config('boiler.headings');
    }

    public static function getButtonSize()
    {
        return config('boiler.button-size-class');
    }

    public static function getTableClass()
    {
        return config('boiler.table-classes');
    }

}