<?php namespace EveningDesign\Boiler\Console\Commands;

use EveningDesign\Boiler\Support\Helpers;
use EveningDesign\Boiler\Support\ResourceNames;
use EveningDesign\Boiler\Support\TableInfo;
use Illuminate\Console\Command;

class GenerateRequest extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boiler:request {resourceName : StudlyCase name of the resource (Model) to create the validation request for}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a resource request for validation';

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
        $tableInfo = new TableInfo($names->reset()->plural()->snake()->get());

        $content = view()->file(Helpers::makeTemplateFilename("request.blade.php"), ['names' => $names, 'columns' => $tableInfo->getFilteredColumns()]);
        Helpers::ensureDirectory(Helpers::makeRequestsFilename());
        file_put_contents(Helpers::makeRequestsFilename($names->getRequestClass().".php"), $content);
        $this->info("Wrote ".$names->getRequestClass().".php");
    }
}