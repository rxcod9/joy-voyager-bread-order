<?php

namespace Joy\VoyagerBreadOrder\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'orders');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'orders',
                'display_name_singular' => __('joy-voyager-bread-order::seeders.data_types.order.singular'),
                'display_name_plural'   => __('joy-voyager-bread-order::seeders.data_types.order.plural'),
                'icon'                  => 'voyager-bread voyager-bread-order voyager-basket',
                'model_name'            => 'Joy\\VoyagerBreadOrder\\Models\\Order',
                // 'policy_name'           => 'Joy\\VoyagerBreadOrder\\Policies\\OrderPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadOrder\\Http\\Controllers\\VoyagerBreadOrderController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
