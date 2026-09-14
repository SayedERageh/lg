<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            [
                'title_ar' => 'صيانة وإصلاح غسالات LG',
                'title_en' => 'LG Washing Machine Maintenance',
                'slug' => 'lg-washing-machine-maintenance',
                'category_ar' => 'صيانة غسالات LG',
                'category_en' => 'LG Washing Machine Maintenance',
                'description_ar' => 'تنفيذ أعمال صيانة وإصلاح لمختلف أعطال غسالات LG، بداية من تشخيص العطل وحتى إصلاح المشكلة وإعادة تشغيل الغسالة بكفاءة.',
                'description_en' => 'Maintenance and repair services for various LG washing machine problems, from accurate diagnosis to repairing the fault and restoring efficient operation.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/lg-washing-machine-maintenance.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'إصلاح أعطال الغسالات',
                'title_en' => 'Washing Machine Fault Repair',
                'slug' => 'washing-machine-fault-repair',
                'category_ar' => 'إصلاح الأعطال',
                'category_en' => 'Fault Repair',
                'description_ar' => 'تشخيص وإصلاح أعطال غسالات LG المختلفة، مع فحص مكونات الغسالة وتحديد سبب العطل واختيار الحل المناسب.',
                'description_en' => 'Diagnosis and repair of various LG washing machine faults, including component inspection, fault identification, and selecting the appropriate repair solution.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/lg-fault-repair.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'توفير قطع غيار LG',
                'title_en' => 'LG Spare Parts Supply',
                'slug' => 'lg-spare-parts-supply',
                'category_ar' => 'قطع غيار LG',
                'category_en' => 'LG Spare Parts',
                'description_ar' => 'توفير قطع غيار ومكونات مختلفة لغسالات LG، مع المساعدة في تحديد القطعة المناسبة حسب نوع وموديل الجهاز والعطل.',
                'description_en' => 'Supply of various spare parts and components for LG washing machines, with assistance in identifying the suitable part according to the appliance type, model, and fault.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/lg-spare-parts.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'صيانة في نفس اليوم',
                'title_en' => 'Same-Day Maintenance Service',
                'slug' => 'same-day-lg-maintenance',
                'category_ar' => 'خدمة سريعة',
                'category_en' => 'Fast Service',
                'description_ar' => 'استجابة سريعة لطلبات صيانة غسالات LG وإمكانية تنفيذ الصيانة في نفس اليوم حسب توفر الفني وموقع العميل وطبيعة العطل.',
                'description_en' => 'Fast response to LG washing machine maintenance requests, with same-day service available depending on technician availability, customer location, and fault type.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/same-day-maintenance.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],

        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}