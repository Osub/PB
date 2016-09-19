<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'PB:install {name?}  {--user=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install test';

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
        $arguments = $this->arguments();
        $options = $this->options();
        $username = $this->ask('What is your name?');
        $password = $this->secret('What is the password?');
        if ($this->confirm('Do you wish to continue? [y|N]')) {
            dd($password);
        }
        dd($username);
        $this->info('Display this on the screen'.$arguments['name'].'===='.$options['user']);
    }
}
