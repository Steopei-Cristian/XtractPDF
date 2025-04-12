<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class SetupStorageCommand extends Command
{
    protected $signature = 'storage:setup';
    protected $description = 'Set up the required storage directories';

    public function handle()
    {
        $this->info('Setting up storage directories...');

        // Create the xml directory if it doesn't exist
        if (!Storage::exists('public/xml')) {
            Storage::makeDirectory('public/xml');
            $this->info('Created public/xml directory');
        }

        // Create symbolic link if it doesn't exist
        if (!file_exists(public_path('storage'))) {
            $this->call('storage:link');
            $this->info('Created storage symbolic link');
        }

        $this->info('Storage setup completed successfully!');
    }
} 