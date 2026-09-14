<?php

namespace Database\Seeders;

use App\Models\CoreValue;
use Illuminate\Database\Seeder;

class CoreValueSeeder extends Seeder
{
    public function run(): void
    {
        $values = [
            [
                'title_ar' => 'صيانة باحترافية',
                'title_en' => 'Professional Maintenance',
                'description_ar' => 'نعتمد على فنيين ذوي خبرة في تشخيص وإصلاح أعطال أجهزة LG باحترافية ودقة.',
                'description_en' => 'Our experienced technicians provide professional and accurate diagnosis and repair for LG appliances.',
                'icon' => 'bi bi-tools',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'سرعة الاستجابة',
                'title_en' => 'Fast Response',
                'description_ar' => 'نسعى للاستجابة السريعة لطلبات الصيانة ومساعدة العملاء في حل الأعطال في أسرع وقت ممكن.',
                'description_en' => 'We respond quickly to maintenance requests and work to solve appliance problems as soon as possible.',
                'icon' => 'bi bi-lightning-charge',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'قطع غيار موثوقة',
                'title_en' => 'Reliable Spare Parts',
                'description_ar' => 'نوفر قطع غيار مناسبة لأعمال صيانة أجهزة LG مع الحرص على الجودة والاعتمادية.',
                'description_en' => 'We provide suitable spare parts for LG appliance repairs, with a focus on quality and reliability.',
                'icon' => 'bi bi-patch-check',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'صيانة في نفس اليوم',
                'title_en' => 'Same-Day Service',
                'description_ar' => 'نوفر خدمة الصيانة في نفس اليوم لبعض الطلبات حسب توافر الفني وموقع العميل.',
                'description_en' => 'Same-day maintenance service is available for selected requests, subject to technician availability and service location.',
                'icon' => 'bi bi-calendar-check',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'خدمة عملاء متميزة',
                'title_en' => 'Excellent Customer Service',
                'description_ar' => 'فريقنا جاهز للرد على استفسارات العملاء ومساعدتهم في الوصول إلى الحل المناسب لأعطال أجهزتهم.',
                'description_en' => 'Our team is ready to answer customer inquiries and help find the right solution for appliance problems.',
                'icon' => 'bi bi-headset',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'رضا العملاء',
                'title_en' => 'Customer Satisfaction',
                'description_ar' => 'نحرص على تقديم تجربة صيانة جيدة وبناء علاقة قائمة على الثقة والاهتمام باحتياجات عملائنا.',
                'description_en' => 'We focus on providing a positive maintenance experience and building customer relationships based on trust and care.',
                'icon' => 'bi bi-emoji-smile',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($values as $value) {
            CoreValue::updateOrCreate(
                ['title_en' => $value['title_en']],
                $value
            );
        }
    }
}