<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CompanySettingSeeder::class,
            HeroSlideSeeder::class,
            ServiceSeeder::class,
            CoreValueSeeder::class,
            ProductSeeder::class,
            ProjectSeeder::class,
                        SiteSettingsSeeder::class,
                        HomeSectionSeeder::class,

        ]);
    }
}