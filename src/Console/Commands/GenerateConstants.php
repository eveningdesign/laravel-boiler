<?php

namespace EveningDesign\Boiler\Console\Commands;

use EveningDesign\Boiler\Support\Helpers;
use EveningDesign\Boiler\Support\ResourceNames;
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
    protected $description = 'Generate constants for a standard CRUD resource';

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

        $content = view()->file(Helpers::makeTemplateFilename('constants.blade.php'), ['names' => $names]);
        Helpers::ensureDirectory(Helpers::makeConstantsFilename());
        file_put_contents(Helpers::makeConstantsFilename($names->getConstantClass().'.php'), $content);
        $this->info("Wrote ".$names->getConstantClass()."php");
    }
}
