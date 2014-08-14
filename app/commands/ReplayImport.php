<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ReplayImport extends Command
{

    protected $name = 'replay:import';

    protected $description = 'Imports data from flatfile.';

    public function __construct()
    {
        parent::__construct();
    }

    public function fire()
    {

        //$this->info('Command is successfully working.');

        $match_id = $this->argument('match_id');

        if(is_numeric($match_id))
        {
            //return $this->info('This is indeed a integer');

            if(fopen($match_id, 'string'))
            {
                return $this->info('could find.');
            }
            else
            {
                return $this->error('could nor find');
            }

        }
        else
        {
            return $this->error('This is not a integer, shits happening');
        }
    }

    protected function getArguments()
    {
        return
        [
            [
                'match_id', InputArgument::REQUIRED, 'Example'
            ]

        ];
    }
}
