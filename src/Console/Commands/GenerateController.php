<?php namespace EveningDesign\Boiler\Console\Commands;

use EveningDesign\Boiler\Support\Helpers;
use EveningDesign\Boiler\Support\ResourceNames;
use Illuminate\Console\Command;

class GenerateController extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boiler:controller {resourceName : StudlyCase name of the resource (Model) to create views for}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate standard CRUD views for a resource';

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
        $names = new ResourceNames($this->argument('resourceName'));

        $content = view()->file(Helpers::makeTemplateFilename("controller.blade.php"), ['names' => $names]);
        Helpers::ensureDirectory(Helpers::makeControllerFilename());
        file_put_contents(Helpers::makeControllerFilename($names->getControllerClass().".php"), $content);
        $this->info("Wrote ".$names->getControllerClass().".php");
    }
}