<?php namespace EveningDesign\Boiler\Console\Commands;

use EveningDesign\Boiler\Support\Helpers;
use EveningDesign\Boiler\Support\ResourceNames;
use Illuminate\Console\Command;

class GenerateRoute extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boiler:route {resourceName : StudlyCase name of the resource (Model) to create a route entry for}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate standard resource route definition';

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
        $routeEntry = sprintf("//Route::resource(%s::PATH, %s::CONTROLLER);".PHP_EOL, $names->getNamespacedConstantClass(), $names->getNamespacedConstantClass());
        file_put_contents(Helpers::makeHttpFilename('routes.php'), $routeEntry, FILE_APPEND);
        $this->info("Added entry to routes.php");
    }
}