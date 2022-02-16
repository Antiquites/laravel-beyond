<?php

namespace Regnerisch\LaravelBeyond\Commands;

use Illuminate\Console\Command;

class MakeRoutesCommand extends Command
{
    protected $signature = 'beyond:make:route {application}';

    protected $description = 'Make a new file for routes';

    public function handle()
    {
        $application = $this->argument('application');

        beyond_copy_stub(
            'routes.stub',
            app_path() . "/../src/App/{$application}/routes.php",
            [
                '{{ application }}' => $application,
            ]
        );
    }
}
