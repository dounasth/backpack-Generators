<?php

namespace Backpack\Generators\Console\Commands;

use Illuminate\Console\Command;

class ModelBackpackCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'backpack:model';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:model {name} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a backpack templated model';

    /**
     * Execute the console command.
     *
     * @return bool|null
     */
    public function handle()
    {
        $this->call('backpack:crud-model', ['name' => $this->argument('name'), '--force' => $this->option('force')]);
    }
}
