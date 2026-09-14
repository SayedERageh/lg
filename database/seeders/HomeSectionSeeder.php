<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'key' => 'about',
                'title_ar' => 'من نحن',
                'title_en' => 'ABOUT US',
                'subtitle_ar' => 'خبرة واحترافية في صيانة أجهزة LG',
                'subtitle_en' => 'Professional LG Maintenance Expertise',
                'description_ar' => 'سنيور لصيانة وقطع غيار LG متخصص في صيانة وإصلاح أجهزة LG، مع التركيز على سرعة الاستجابة، دقة تشخيص الأعطال، وتوفير قطع الغيار المناسبة لأعمال الصيانة والإصلاح.',
                'description_en' => 'Senior LG Maintenance & Spare Parts specializes in LG appliance maintenance and repair, focusing on fast response, accurate fault diagnosis, and reliable spare parts solutions.',
                'button_text_ar' => 'اعرف المزيد',
                'button_text_en' => 'Learn More',
                'button_url' => '/about',
            ],

            [
                'key' => 'services',
                'title_ar' => 'خدماتنا',
                'title_en' => 'OUR SERVICES',
                'subtitle_ar' => 'حلول متكاملة لصيانة وإصلاح أجهزة LG',
                'subtitle_en' => 'Complete LG Maintenance & Repair Solutions',
                'description_ar' => 'نقدم خدمات صيانة وإصلاح أجهزة LG، بداية من فحص الجهاز وتشخيص العطل وحتى الإصلاح واستبدال قطع الغيار اللازمة.',
                'description_en' => 'We provide LG appliance maintenance and repair services, from inspection and fault diagnosis to professional repair and spare parts replacement.',
                'button_text_ar' => 'جميع الخدمات',
                'button_text_en' => 'All Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'values',
                'title_ar' => 'لماذا سنيور؟',
                'title_en' => 'WHY SENIOR?',
                'subtitle_ar' => 'الجودة والسرعة والاعتمادية أساس خدمتنا',
                'subtitle_en' => 'Quality, Speed and Reliability',
                'description_ar' => 'نحرص على تقديم خدمة صيانة احترافية من خلال فنيين ذوي خبرة، وسرعة في الاستجابة، وقطع غيار مناسبة، مع الاهتمام برضا العملاء.',
                'description_en' => 'We provide professional maintenance through experienced technicians, fast response, reliable spare parts, and a strong focus on customer satisfaction.',
            ],

            [
                'key' => 'projects',
                'title_ar' => 'أجهزة LG التي نخدمها',
                'title_en' => 'LG APPLIANCES WE SERVICE',
                'subtitle_ar' => 'صيانة وإصلاح لمختلف أجهزة LG',
                'subtitle_en' => 'Maintenance & Repair for LG Appliances',
                'description_ar' => 'نقدم خدمات الصيانة والإصلاح لمختلف أجهزة LG، مع التركيز على تشخيص الأعطال وتنفيذ أعمال الإصلاح بكفاءة وسرعة.',
                'description_en' => 'We provide maintenance and repair services for various LG appliances, with a focus on accurate diagnosis and efficient repairs.',
                'button_text_ar' => 'اكتشف خدماتنا',
                'button_text_en' => 'Explore Our Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'commitment',
                'title_ar' => 'التزامنا',
                'title_en' => 'OUR COMMITMENT',
                'subtitle_ar' => 'خدمة موثوقة تبدأ من أول اتصال',
                'subtitle_en' => 'Reliable Service From the First Call',
                'description_ar' => 'نلتزم بسرعة الاستجابة، وتشخيص الأعطال بدقة، وتقديم حلول صيانة مناسبة، مع توفير الدعم اللازم لعملائنا قبل وأثناء وبعد الخدمة.',
                'description_en' => 'We are committed to fast response, accurate diagnosis, suitable maintenance solutions, and professional customer support before, during, and after service.',
            ],

            [
                'key' => 'cta',
                'title_ar' => 'غسالتك LG فيها عطل؟',
                'title_en' => 'HAVING TROUBLE WITH YOUR LG WASHING MACHINE?',
                'subtitle_ar' => 'سنيور جاهز لخدمتك',
                'subtitle_en' => 'SENIOR IS READY TO HELP',
                'description_ar' => 'لا تدع عطل غسالتك يعطل يومك. تواصل معنا الآن لطلب الصيانة والحصول على المساعدة المناسبة من فريق سنيور.',
                'description_en' => 'Do not let an appliance problem disrupt your day. Contact us now to request maintenance and get professional assistance from the Senior team.',
                'button_text_ar' => 'اطلب صيانة الآن',
                'button_text_en' => 'Request Maintenance',
                'button_url' => '/contact',
            ],
        ];

        foreach ($sections as $section) {
            HomeSection::updateOrCreate(
                ['key' => $section['key']],
                $section
            );
        }
    }
}