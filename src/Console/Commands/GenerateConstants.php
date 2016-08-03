<?php

namespace EveningDesign\Boiler\Console\Commands;

use EveningDesign\Boiler\Helpers;
use Illuminate\Console\Command;

class GenerateConstants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boiler:constants {resourceName : StudlyCase name of the resource}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate resource constants for a table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $resourceName = $this->argument('resourceName');
        $constantsName = studly_case($resourceName)."Constants";
        $controllerName = str_plural($resourceName)."Controller";
        $viewPath = snake_case($resourceName);

        $content = view()->file(Helpers::makeTemplateFilename('constants.blade.php'),
            ['constantsName' => $constantsName, 'controllerName' => $controllerName, 'viewPath' => $viewPath]);
        Helpers::ensureDirectory(Helpers::makeConstantsFilename());
        file_put_contents(Helpers::makeConstantsFilename($constantsName.'.php'), $content);
        $this->info('Wrote constants file');
    }
}
