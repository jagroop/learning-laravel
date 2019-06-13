<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LogCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is just a sample command';

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
        info('jagroop');
    }
}
