<?php

namespace Joy\VoyagerBreadOrder\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSetting('order.key1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-bread-order::seeders.settings.order.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Order',
            ])->save();
        }

        $setting = $this->findSetting('order.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-bread-order::seeders.settings.order.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'Order',
            ])->save();
        }
    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
