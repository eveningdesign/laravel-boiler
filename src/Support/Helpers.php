<?php namespace EveningDesign\Boiler\Support;

class Helpers {

    public static function makeTemplateFilename($filename) {
        return __DIR__ . '/../templates/' .$filename;
    }

    public static function makeConstantsFilename($filename = "") {
        return app_path("Constants")."/$filename";
    }

    public static function makeViewsFilename($filename = "") {
        return base_path("resources/views")."/$filename";
    }

    public static function ensureDirectory($directory) {
        if(!file_exists($directory)) {
            mkdir($directory);
        }
    }

    public static function makeHumanFriendly($text) {
        return ucwords(str_replace("_", " ", snake_case($text)));
    }

}