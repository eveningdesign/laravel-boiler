<?php namespace EveningDesign\Boiler\Console\Commands;

use EveningDesign\Boiler\Support\Helpers;
use EveningDesign\Boiler\Support\ResourceNames;
use EveningDesign\Boiler\Support\TableInfo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GenerateResource extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boiler:resource {resourceName : StudlyCase name of the resource to create boilerplate for}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate all the standard CRUD boilerplate for a resource';

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
        $resource = $this->argument('resourceName');
        $this->call('boiler:constants', ['resourceName' => $resource]);
        $this->call('boiler:controller', ['resourceName' => $resource]);
        $this->call('boiler:model', ['resourceName' => $resource]);
        $this->call('boiler:request', ['resourceName' => $resource]);
        $this->call('boiler:route', ['resourceName' => $resource]);
        $this->call('boiler:views', ['resourceName' => $resource]);
    }
}