<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        echo round(5.123,2);
        exit();

        $str = 'truong dai hoc cong nghe thong tin';
        $l = strlen($str);
        print_r(substr($str,0,- ($l - 10)));
        print_r(substr($str,10,$l-1));
    }
}
