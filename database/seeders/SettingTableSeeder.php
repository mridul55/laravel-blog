<?php

namespace Database\Seeders;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'Example.com',
            'copyroght' => 'Copyright © 2023 All rights reserved | This template is made
             with  by Colorlib---Downloaded from Themeslab',

        ]);
    }
}
