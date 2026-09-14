<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            [
                'title_ar' => 'صيانة غسالات LG',
                'title_en' => 'LG Washing Machine Maintenance',
                'slug' => 'lg-washing-machine-maintenance',

                'short_description_ar' => 'صيانة وإصلاح غسالات LG وتشخيص الأعطال بدقة وسرعة.',
                'short_description_en' => 'Professional maintenance and repair for LG washing machines with accurate fault diagnosis.',

                'description_ar' =>
                    'نقدم خدمات صيانة وإصلاح شاملة لغسالات LG، بداية من فحص الجهاز وتشخيص العطل بدقة وحتى تنفيذ الإصلاح المناسب، مع الاهتمام بجودة العمل وسرعة الاستجابة.',

                'description_en' =>
                    'We provide comprehensive maintenance and repair services for LG washing machines, from accurate diagnosis to the appropriate repair, with a focus on quality and fast response.',

                'icon' => 'bi bi-tools',
                'image' => 'services/lg-washing-machine-maintenance.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'إصلاح أعطال غسالات LG',
                'title_en' => 'LG Washing Machine Fault Repair',
                'slug' => 'lg-washing-machine-fault-repair',

                'short_description_ar' => 'تشخيص وإصلاح مختلف أعطال غسالات LG بواسطة فنيين متخصصين.',
                'short_description_en' => 'Diagnosis and repair of various LG washing machine faults by experienced technicians.',

                'description_ar' =>
                    'نعمل على تشخيص وإصلاح مختلف أعطال غسالات LG، سواء كانت المشكلة في التشغيل أو الصرف أو العصر أو أي مكون آخر، مع تحديد سبب العطل واختيار الحل المناسب.',

                'description_en' =>
                    'We diagnose and repair various LG washing machine problems, including operating, drainage, spinning, and component-related faults, while identifying the cause and selecting the appropriate solution.',

                'icon' => 'bi bi-wrench-adjustable',
                'image' => 'services/lg-fault-repair.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'كشف وتشخيص أعطال LG',
                'title_en' => 'LG Fault Diagnosis',
                'slug' => 'lg-fault-diagnosis',

                'short_description_ar' => 'فحص الغسالة وتحديد سبب العطل للوصول للحل المناسب.',
                'short_description_en' => 'Professional appliance inspection to identify faults and determine the right solution.',

                'description_ar' =>
                    'نقوم بفحص غسالة LG وتحديد سبب المشكلة قبل بدء أعمال الإصلاح، لمساعدتك على معرفة العطل والحل المناسب وتقليل الوقت اللازم لإعادة الجهاز للعمل.',

                'description_en' =>
                    'We inspect LG washing machines to identify the cause of the problem before repair, helping determine the right solution and reduce the time needed to restore the appliance.',

                'icon' => 'bi bi-search',
                'image' => 'services/lg-diagnosis.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'توفير قطع غيار غسالات LG',
                'title_en' => 'LG Washing Machine Spare Parts',
                'slug' => 'lg-washing-machine-spare-parts',

                'short_description_ar' => 'توفير قطع غيار ومكونات غسالات LG حسب نوع وموديل الجهاز.',
                'short_description_en' => 'LG washing machine spare parts selected according to appliance type and model.',

                'description_ar' =>
                    'نوفر مجموعة متنوعة من قطع غيار ومكونات غسالات LG، مع المساعدة في تحديد القطعة المناسبة حسب موديل الغسالة ونوع العطل لضمان توافقها مع الجهاز.',

                'description_en' =>
                    'We provide a variety of LG washing machine spare parts and components, with assistance in identifying the right part according to the washing machine model and fault.',

                'icon' => 'bi bi-gear',
                'image' => 'services/lg-spare-parts.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'صيانة في نفس اليوم',
                'title_en' => 'Same-Day LG Maintenance',
                'slug' => 'same-day-lg-maintenance',

                'short_description_ar' => 'استجابة سريعة وإمكانية تنفيذ صيانة غسالات LG في نفس اليوم.',
                'short_description_en' => 'Fast response with same-day LG washing machine maintenance when available.',

                'description_ar' =>
                    'نسعى لتوفير استجابة سريعة لطلبات صيانة غسالات LG، مع إمكانية تنفيذ الصيانة في نفس اليوم حسب توفر الفني وموقع العميل وطبيعة العطل.',

                'description_en' =>
                    'We aim to provide a fast response to LG washing machine maintenance requests, with same-day service available depending on technician availability, customer location, and fault type.',

                'icon' => 'bi bi-lightning-charge',
                'image' => 'services/same-day-maintenance.jpg',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'دعم وخدمة عملاء LG',
                'title_en' => 'LG Customer Support',
                'slug' => 'lg-customer-support',

                'short_description_ar' => 'دعم ومتابعة لمساعدتك في حل مشاكل غسالة LG واختيار الخدمة المناسبة.',
                'short_description_en' => 'Customer support to help resolve LG washing machine issues and choose the right service.',

                'description_ar' =>
                    'فريق سنيور جاهز للرد على استفسارات العملاء ومساعدتهم في تحديد الخدمة المناسبة، ومعرفة تفاصيل العطل ومتابعة طلبات الصيانة وقطع الغيار.',

                'description_en' =>
                    'The Senior team is ready to answer customer inquiries, help identify the right service, understand appliance problems, and follow up on maintenance and spare parts requests.',

                'icon' => 'bi bi-headset',
                'image' => 'services/customer-support.jpg',
                'sort_order' => 6,
                'is_active' => true,
            ],

        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}