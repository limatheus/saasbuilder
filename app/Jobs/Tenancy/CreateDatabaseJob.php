<?php

namespace App\Jobs\Tenancy;


use Stancl\Tenancy\Database\DatabaseManager;
use Stancl\Tenancy\Jobs\CreateDatabase;

class CreateDatabaseJob extends CreateDatabase
{


    /**
     * Execute the job.
     */
    public function handle(DatabaseManager $databaseManager): void
    {
        //

        if(!app()->isProduction()){

            (new DeleteDatabaseJob($this->tenant))->handle();
        }

        parent::handle($databaseManager);
    }
}
