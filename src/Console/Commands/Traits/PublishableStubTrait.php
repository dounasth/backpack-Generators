<?php

namespace Backpack\Generators\Console\Commands\Traits;

trait PublishableStubTrait
{
    /**
     * Check if the stub exists in the project's stubs folder.
     * If it does, return the path to it.
     * If it doesn't, return the path to the stub in the package.
     *
     * @param  string  $path
     *
     * @return string
     */
    public function getStubPath(string $path): string
    {
        if (file_exists(base_path('stubs/backpack/generators/{$stub}.stub'))) {
            return base_path('stubs/backpack/generators/{$stub}.stub');
        }

        return __DIR__.'/../stubs/{$stub}.stub';
    }
}
