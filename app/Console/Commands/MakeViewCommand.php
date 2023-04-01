<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    protected $signature = 'make:view {name}';

    protected $description = 'Create a new view file.';

    public function handle()
    {
        $name = $this->argument('name');
        $path = resource_path('views/'.str_replace('.', '/', $name).'.blade.php');
        if (File::exists($path)) {
            $this->error('View already exists!');
            return;
        }
        File::ensureDirectoryExists(dirname($path));
        File::put($path, '');
        $this->info('View created successfully.');
    }
}
