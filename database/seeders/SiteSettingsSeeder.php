<?php

namespace Database\Seeders;

use App\Models\PageSeo;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Site Settings
        |--------------------------------------------------------------------------
        */

        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Senior LG Maintenance & Spare Parts',

                'primary_color' => '#A50034',
                'primary_dark_color' => '#7D0028',

                'secondary_color' => '#1F1F1F',
                'secondary_dark_color' => '#111111',

                'light_blue_color' => '#FCEEF2',
                'light_color' => '#FAFAFA',

                'white_color' => '#FFFFFF',

                'text_color' => '#222222',
                'muted_color' => '#6B6B6B',

                'border_color' => '#E5E5E5',

                'site_description' =>
                    'سنيور لصيانة وقطع غيار LG، متخصصون في صيانة وإصلاح غسالات LG وتوفير قطع الغيار المناسبة، مع سرعة الاستجابة وجودة الخدمة.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | SEO Pages
        |--------------------------------------------------------------------------
        */

        $pages = [

            /*
            |--------------------------------------------------------------------------
            | Home
            |--------------------------------------------------------------------------
            */

            'home' => [
                'title_ar' =>
                    'سنيور لصيانة وقطع غيار LG | صيانة غسالات LG',

                'title_en' =>
                    'Senior LG Maintenance & Spare Parts | LG Washing Machine Repair',

                'description_ar' =>
                    'سنيور لصيانة وقطع غيار LG متخصص في صيانة وإصلاح غسالات LG وتشخيص الأعطال وتوفير قطع الغيار المناسبة، مع سرعة الاستجابة وخدمة صيانة احترافية.',

                'description_en' =>
                    'Senior LG Maintenance & Spare Parts specializes in LG washing machine maintenance, repair, fault diagnosis, and spare parts supply with fast and professional service.',

                'keywords_ar' =>
                    'سنيور لصيانة LG, صيانة غسالات LG, تصليح غسالات LG, مركز صيانة LG, فني غسالات LG, قطع غيار LG, قطع غيار غسالات LG, أعطال غسالات LG',

                'keywords_en' =>
                    'Senior LG maintenance, LG washing machine maintenance, LG washing machine repair, LG service, LG technician, LG spare parts, LG washing machine spare parts',

                'og_title_ar' =>
                    'سنيور لصيانة وقطع غيار LG | صيانة غسالات LG',

                'og_title_en' =>
                    'Senior LG Maintenance & Spare Parts',

                'og_description_ar' =>
                    'صيانة وإصلاح غسالات LG وتوفير قطع الغيار المناسبة مع سرعة الاستجابة وخدمة احترافية.',

                'og_description_en' =>
                    'Professional LG washing machine maintenance, repair, and spare parts services with fast response.',
            ],


            /*
            |--------------------------------------------------------------------------
            | About
            |--------------------------------------------------------------------------
            */

            'about' => [
                'title_ar' =>
                    'من نحن | سنيور لصيانة وقطع غيار LG',

                'title_en' =>
                    'About Us | Senior LG Maintenance',

                'description_ar' =>
                    'تعرف على سنيور لصيانة وقطع غيار LG وخدماتنا في صيانة وإصلاح غسالات LG وتشخيص الأعطال وتوفير قطع الغيار المناسبة.',

                'description_en' =>
                    'Learn more about Senior LG Maintenance and our services for LG washing machine maintenance, repair, fault diagnosis, and spare parts.',

                'keywords_ar' =>
                    'من نحن, سنيور LG, سنيور للصيانة, صيانة LG, صيانة غسالات LG, قطع غيار LG',

                'keywords_en' =>
                    'about Senior LG, Senior maintenance, LG maintenance, LG washing machine repair, LG spare parts',

                'og_title_ar' =>
                    'من نحن - سنيور لصيانة وقطع غيار LG',

                'og_title_en' =>
                    'About Senior LG Maintenance',

                'og_description_ar' =>
                    'تعرف على خدمات سنيور في صيانة وإصلاح غسالات LG وتوفير قطع الغيار.',

                'og_description_en' =>
                    'Learn about Senior LG maintenance, repair, and spare parts services.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Services
            |--------------------------------------------------------------------------
            */

            'services' => [
                'title_ar' =>
                    'خدمات صيانة LG | سنيور لصيانة غسالات LG',

                'title_en' =>
                    'LG Maintenance Services | Senior',

                'description_ar' =>
                    'اكتشف خدمات سنيور لصيانة غسالات LG، بداية من كشف وتشخيص الأعطال وإصلاح الغسالات وحتى توفير قطع الغيار وخدمة الصيانة السريعة.',

                'description_en' =>
                    'Explore Senior LG maintenance services, including fault diagnosis, washing machine repair, spare parts supply, and fast maintenance service.',

                'keywords_ar' =>
                    'خدمات صيانة LG, صيانة غسالات LG, إصلاح غسالات LG, كشف أعطال LG, تشخيص أعطال LG, قطع غيار LG',

                'keywords_en' =>
                    'LG maintenance services, LG washing machine repair, LG fault diagnosis, LG spare parts, LG service',

                'og_title_ar' =>
                    'خدماتنا - صيانة وإصلاح غسالات LG',

                'og_title_en' =>
                    'Our LG Maintenance Services',

                'og_description_ar' =>
                    'خدمات متكاملة لصيانة وإصلاح غسالات LG وتوفير قطع الغيار المناسبة.',

                'og_description_en' =>
                    'Complete LG washing machine maintenance, repair, and spare parts services.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Projects
            |--------------------------------------------------------------------------
            */

            'projects' => [
                'title_ar' =>
                    'أعمال صيانة غسالات LG | سنيور',

                'title_en' =>
                    'LG Maintenance Projects | Senior',

                'description_ar' =>
                    'تعرف على نماذج من أعمال وخدمات سنيور في صيانة وإصلاح غسالات LG وتوفير قطع الغيار وحلول الأعطال المختلفة.',

                'description_en' =>
                    'Explore examples of Senior LG maintenance and repair services, spare parts supply, and solutions for various washing machine faults.',

                'keywords_ar' =>
                    'أعمال صيانة LG, صيانة غسالات, إصلاح غسالات LG, أعطال LG, قطع غيار غسالات LG, سنيور LG',

                'keywords_en' =>
                    'LG maintenance projects, LG washing machine repair, LG faults, LG spare parts, Senior LG',

                'og_title_ar' =>
                    'أعمالنا - صيانة غسالات LG',

                'og_title_en' =>
                    'Our LG Maintenance Work',

                'og_description_ar' =>
                    'نماذج من خدمات صيانة وإصلاح غسالات LG التي نقدمها لعملائنا.',

                'og_description_en' =>
                    'Examples of our LG washing machine maintenance and repair services.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            'contact' => [
                'title_ar' =>
                    'تواصل معنا | سنيور لصيانة وقطع غيار LG',

                'title_en' =>
                    'Contact Us | Senior LG Maintenance',

                'description_ar' =>
                    'تواصل مع سنيور لصيانة وقطع غيار LG لحجز خدمة صيانة غسالتك أو الاستفسار عن الأعطال وقطع الغيار المناسبة.',

                'description_en' =>
                    'Contact Senior LG Maintenance to request washing machine maintenance or inquire about LG faults and suitable spare parts.',

                'keywords_ar' =>
                    'رقم صيانة LG, تواصل مع سنيور, صيانة غسالات LG, حجز صيانة LG, قطع غيار LG',

                'keywords_en' =>
                    'LG maintenance contact, Senior LG contact, LG washing machine service, LG spare parts',

                'og_title_ar' =>
                    'تواصل معنا - سنيور لصيانة وقطع غيار LG',

                'og_title_en' =>
                    'Contact Senior LG Maintenance',

                'og_description_ar' =>
                    'اتصل بنا لحجز صيانة غسالة LG أو الاستفسار عن قطع الغيار والخدمات المتاحة.',

                'og_description_en' =>
                    'Contact us to request LG washing machine maintenance or inquire about spare parts and available services.',
            ],
        ];


        /*
        |--------------------------------------------------------------------------
        | Insert / Update SEO
        |--------------------------------------------------------------------------
        */

        foreach ($pages as $pageKey => $seo) {

            PageSeo::updateOrCreate(
                [
                    'page_key' => $pageKey,
                ],
                array_merge(
                    $seo,
                    [
                        'index' => true,
                        'follow' => true,
                    ]
                )
            );
        }
    }
}