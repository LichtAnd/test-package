<?php

namespace LichtAnd\TestPackage\Commands;

use Illuminate\Console\Command;

class TestPackageCommand extends Command
{
    public $signature = 'test-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
