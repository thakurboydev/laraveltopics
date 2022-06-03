<?php

namespace App\Console\Commands;

use App\Http\Controllers\GuardController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SumOfTwoNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sumoftwonumber:cone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add two number ........';

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
        $val=10;
       Log::info(GuardController::command_responce($val));
    }
}
