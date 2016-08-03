<?php namespace EveningDesign\Boiler\Console\Commands;

use EveningDesign\Boiler\Support\Helpers;
use EveningDesign\Boiler\Support\ResourceNames;
use Illuminate\Console\Command;

class GenerateViews extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boiler:views {resourceName : StudlyCase name of the resource to create views for}';

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

        collect(['index', 'create', 'show', 'edit'])->each(function($viewName) use($names) {
            $content = view()->file(Helpers::makeTemplateFilename("views/$viewName.blade.php"), ['names' => $names]);
            Helpers::ensureDirectory(Helpers::makeViewsFilename($names->getViewPath()));
            file_put_contents(Helpers::makeViewsFilename($names->getViewPath()."/$viewName.blade.php"), $content);
            $this->info("Wrote ".$names->getViewPath()."/$viewName.blade.php");
        });
    }
}