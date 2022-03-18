<?php

namespace Joy\VoyagerBreadOrder\Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DummyOrdersTableSeeder::class
        ]);
    }
}
