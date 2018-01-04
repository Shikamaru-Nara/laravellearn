<?php namespace Vendor\Name\Console\Commands;

use Illuminate\Console\Command;

/**
 * The NameCommand class.
 *
 * @package Vendor\Name
 * @author  Dendi Sunandar <dendisunandar@gmail.com>
 */
class NameCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vendor:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Vendor\Name package';

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
        $this->info('Welcome to command for Vendor\Name package');
    }
}
