<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DateExampleClass;

class TestLaravelFacades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel-facades:handle';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $getYMD = DateExampleClass::dateFormatYMD('10/21/2021');
        print_r($getYMD.PHP_EOL);

        $getMDY = DateExampleClass::dateFormatMDY('2021-11-22');
        print_r($getMDY.PHP_EOL);

        return 0;
    }
}
