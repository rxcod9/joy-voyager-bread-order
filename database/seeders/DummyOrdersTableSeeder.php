<?php

namespace Joy\VoyagerBreadOrder\Database\Seeders;

use Joy\VoyagerBreadOrder\Models\Order;
use Illuminate\Database\Seeder;

class DummyOrdersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Order::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Order ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Order Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
