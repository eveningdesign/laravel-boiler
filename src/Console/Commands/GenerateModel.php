<?php namespace EveningDesign\Boiler\Console\Commands;

use EveningDesign\Boiler\Support\Helpers;
use EveningDesign\Boiler\Support\ResourceNames;
use EveningDesign\Boiler\Support\TableInfo;
use Illuminate\Console\Command;

class GenerateModel extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boiler:model {resourceName : StudlyCase name of the resource to create a model for}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate standard model with fillable fields';

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

        $content = view()->file(Helpers::makeTemplateFilename("model.blade.php"), ['names' => $names, 'columns' => $tableInfo->getFilteredColumns()]);
        Helpers::ensureDirectory(Helpers::makeModelFilename());
        file_put_contents(Helpers::makeModelFilename($names->getModelName().".php"), $content);
        $this->info("Wrote ".$names->getModelName().".php");
    }
}