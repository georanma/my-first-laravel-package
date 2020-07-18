<?php

namespace Georanma\MyFirstLaravelPackage\Commands;

use Illuminate\Console\Command;

class MyFirstLaravelPackageCommand extends Command
{
    public $signature = 'my-first-laravel-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
