<?php

namespace EveningDesign\Boiler\Console\Commands;

use Illuminate\Console\Command;

class GenerateConstants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boiler:constants';

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
        $this->info('Aw, yiiisss...');
    }
}
