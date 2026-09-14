<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        HeroSlide::query()->delete();

        HeroSlide::create([
            'title_ar' => 'غسالتك LG فيها عطل؟ إحنا نصلحهالك',
            'title_en' => 'LG Washing Machine Trouble? We Can Fix It',

            'subtitle_ar' => 'سنيور لصيانة وقطع غيار LG',
            'subtitle_en' => 'Senior LG Maintenance & Spare Parts',

            'description_ar' => 'خدمات صيانة وإصلاح احترافية لغسالات LG مع سرعة في الاستجابة وتوفير قطع غيار مناسبة لأعمال الإصلاح والصيانة.',
            'description_en' => 'Professional LG washing machine maintenance and repair services with fast response and reliable spare parts solutions.',

            'image' => 'hero-slides/slide-1.jpg',

            'button_text_ar' => 'اطلب صيانة الآن',
            'button_text_en' => 'Request Maintenance',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'اتصل بنا',
            'secondary_button_text_en' => 'Contact Us',
            'secondary_button_url' => '/contact',

            'sort_order' => 1,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'صيانة غسالات LG بسرعة واحترافية',
            'title_en' => 'Fast & Professional LG Washing Machine Service',

            'subtitle_ar' => 'تشخيص دقيق وإصلاح لمختلف الأعطال',
            'subtitle_en' => 'Accurate Diagnosis & Professional Repair',

            'description_ar' => 'فريق من الفنيين ذوي الخبرة لتشخيص أعطال غسالات LG وتنفيذ أعمال الصيانة والإصلاح بكفاءة، مع إمكانية توفير الخدمة في نفس اليوم حسب توافر الفني وموقع العميل.',
            'description_en' => 'Experienced technicians diagnose and repair LG washing machine problems efficiently, with same-day service available for selected requests depending on technician availability and location.',

            'image' => 'hero-slides/slide-2.jpg',

            'button_text_ar' => 'اطلب فني الآن',
            'button_text_en' => 'Request a Technician',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'خدماتنا',
            'secondary_button_text_en' => 'Our Services',
            'secondary_button_url' => '/services',

            'sort_order' => 2,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'قطع غيار LG وحلول صيانة موثوقة',
            'title_en' => 'Reliable LG Spare Parts & Repair Solutions',

            'subtitle_ar' => 'قطع غيار مناسبة لأعمال الصيانة والإصلاح',
            'subtitle_en' => 'Suitable Spare Parts for Repair & Maintenance',

            'description_ar' => 'نوفر قطع غيار لأجهزة LG ونساعدك في اختيار القطعة المناسبة لإصلاح العطل والحفاظ على كفاءة جهازك.',
            'description_en' => 'We provide LG spare parts and help you find suitable parts for repairs while maintaining your appliance performance.',

            'image' => 'hero-slides/slide-3.jpg',

            'button_text_ar' => 'قطع الغيار',
            'button_text_en' => 'Spare Parts',
            'button_url' => '/products',

            'secondary_button_text_ar' => 'تواصل معنا',
            'secondary_button_text_en' => 'Contact Us',
            'secondary_button_url' => '/contact',

            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}