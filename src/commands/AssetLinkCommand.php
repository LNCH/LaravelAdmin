<?php

namespace Lnch\LaravelAdmin\Commands;

use Illuminate\Console\Command;

class AssetLinkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel-admin:link-assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a symlink between the LaravelAdmin package and the public directory';

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
        $destination = base_path("vendor\\lnch\\laravel-admin\\public");
        $targetDir = public_path('vendor\\lnch');
        $target = $targetDir . "\\laravel-admin";

        if (file_exists(public_path('vendor/lnch/laravel-admin'))) {
            return $this->error('The "public/vendor/lnch/laravel-admin" directory already exists.');
        }

        // Check that public\vendor\lnch exists
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0775, true);
        }

        $this->laravel->make('files')->link($destination, $target);
        $this->info('The [public/vendor/lnch/laravel-admin] directory has been linked.');
    }
}
