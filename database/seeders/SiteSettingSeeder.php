<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'campus_phone_1', 'value' => '+94 770430000'],
            ['key' => 'campus_phone_2', 'value' => '+94 117430000'],
            ['key' => 'campus_email', 'value' => 'info@saegis.ac.lk'],
            ['key' => 'campus_address', 'value' => 'No. 135, Mudungoda, Miriswatta, Gampaha, Sri Lanka'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/saegiscampus'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com/company/saegiscampus'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}