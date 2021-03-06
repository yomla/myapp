<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;

class DeleteUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Users Table Seeded Data';

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
         $data = User::all();        

        foreach($data as $row){
            $row->delete();
        }
        
    }
}
