<?php

namespace App\Console\Commands;

use App\Services\SWAPI\SwapiService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Playing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $service = new SwapiService();

        $return = $service
            ->people()
            ->get();

        dd($return);

    }
}
