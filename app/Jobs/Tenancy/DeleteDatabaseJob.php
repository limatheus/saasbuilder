<?php

namespace App\Jobs\Tenancy;


use Stancl\Tenancy\Jobs\DeleteDatabase;

class DeleteDatabaseJob extends DeleteDatabase
{

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if($this->databaseExists()){

            parent::handle();
        }
    }

    private function databaseExists(): bool
    {
        $database = $this->tenant->database()->getName();

        return $this->tenant->database()->manager()->databaseExists($database);
    }
}
