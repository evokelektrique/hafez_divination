<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ImportHafez extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:hafez';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import poems from local hafez.sql file';

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
    public function handle() {
        $path = "public/hafez.sql";

        try {
            $data = Storage::get($path);
            $this->info("Loaded file at ($path)");
            \DB::unprepared($data);
        } catch(\Illuminate\Contracts\Filesystem\FileNotFoundException $e) {
            $this->error("File not found at ($path)");
        } catch(Exception $e) {
            var_dump($e);
            $this->error("Error in import");
        }



        return Command::SUCCESS;
    }
}
