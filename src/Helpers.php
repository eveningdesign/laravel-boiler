<?php namespace EveningDesign\Boiler;

class Helpers {

    public static function makeTemplateFilename($filename) {
        return __DIR__.'/templates/'.$filename;
    }

    public static function makeConstantsFilename($filename = "") {
        return app_path("Constants/".$filename);
    }

    public static function ensureDirectory($directory) {
        if(!file_exists($directory)) {
            mkdir($directory);
        }
    }

}