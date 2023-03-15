<?php

namespace Backpack\Generators\Console\Commands;

use Illuminate\Console\Command;

class RequestBackpackCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'backpack:request';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:request {name} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a backpack templated request';

    /**
     * Execute the console command.
     *
     * @return bool|null
     */
    public function handle()
    {
        $this->call('backpack:crud-request', ['name' => $this->argument('name'), '--force' => $this->option('force')]);
    }
}
