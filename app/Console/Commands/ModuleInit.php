<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ModuleInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create BackEnd modules';

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
     * @return int
     */
    public function handle()
    {



        $this->call('make:model', ['name'=>$this->argument('name'), '-m'=>true, '-f'=>true]);
        $this->call('make:model', ['name'=>$this->argument('name').'Translation']);
        $this->call('make:controller', ['name'=>'Admin/'.$this->argument('name').'Controller', '-r'=>true]);
        $this->call('make:controller', ['name'=>$this->argument('name').'Controller']);
        $this->call('make:request', ['name'=>$this->argument('name').'Request']);
        $this->call('make:view', [
            'name'=>'admin/'.Str::lower(Str::plural($this->argument('name'))),
            '--resource'=>true,
            '--extends'=> 'layouts.admin',
            '--with-yields' => true
        ]);

        return 0;
    }
}
