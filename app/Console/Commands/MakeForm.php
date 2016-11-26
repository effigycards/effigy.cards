<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Schema;

class MakeForm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:form';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return self
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
        $inputs = [];
        $map    = [];
        $table  = 'cards';

        foreach (Schema::getColumnListing($table) as $column) {
            $map[$column] = Schema::getColumnType($table, $column);
        }

        foreach ($map as $column => $type) {
            if ($type !== 'string') {
                continue;
            }

            $inputs[] = sprintf('<p><label>%s <input name="%s" type="text"></label></p>', title_case($column), $column);
        }

        echo(implode("\n", $inputs));
    }
}
