<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->delete();

        $products = [

            [
                'name_ar' => 'قطع غيار غسالات LG',
                'name_en' => 'LG Washing Machine Spare Parts',

                'slug' => 'lg-washing-machine-spare-parts',

                'description_ar' =>
                    'نوفر مجموعة متنوعة من قطع غيار غسالات LG المناسبة لأعمال الصيانة والإصلاح، مع المساعدة في تحديد القطعة المناسبة حسب موديل الغسالة والعطل.',

                'description_en' =>
                    'We provide a variety of LG washing machine spare parts suitable for maintenance and repair, with assistance in identifying the right part based on the appliance model and fault.',

                'image' => 'products/lg-washing-machine-parts.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 1,
            ],

            [
                'name_ar' => 'كروت إلكترونية لغسالات LG',
                'name_en' => 'LG Washing Machine Control Boards',

                'slug' => 'lg-washing-machine-control-boards',

                'description_ar' =>
                    'كروت ووحدات تحكم إلكترونية لغسالات LG، مع إمكانية المساعدة في تحديد الكارت المناسب حسب موديل الجهاز.',

                'description_en' =>
                    'Control boards and electronic modules for LG washing machines, with assistance in identifying the suitable board based on the appliance model.',

                'image' => 'products/lg-control-board.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 2,
            ],

            [
                'name_ar' => 'طلمبات غسالات LG',
                'name_en' => 'LG Washing Machine Drain Pumps',

                'slug' => 'lg-washing-machine-drain-pumps',

                'description_ar' =>
                    'طلمبات صرف مناسبة لغسالات LG ضمن حلول وقطع الغيار المستخدمة في أعمال صيانة وإصلاح أعطال الصرف.',

                'description_en' =>
                    'Suitable drain pumps for LG washing machines used in maintenance and repair of drainage-related problems.',

                'image' => 'products/lg-drain-pump.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 3,
            ],

            [
                'name_ar' => 'موتورات غسالات LG',
                'name_en' => 'LG Washing Machine Motors',

                'slug' => 'lg-washing-machine-motors',

                'description_ar' =>
                    'موتورات وقطع مرتبطة بنظام تشغيل غسالات LG، مع تحديد القطعة المناسبة وفقًا لموديل الجهاز.',

                'description_en' =>
                    'Motors and related components for LG washing machines, with suitable parts identified according to the appliance model.',

                'image' => 'products/lg-washing-machine-motor.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 4,
            ],

            [
                'name_ar' => 'جلود وأجزاء غسالات LG',
                'name_en' => 'LG Washing Machine Seals & Components',

                'slug' => 'lg-washing-machine-seals-components',

                'description_ar' =>
                    'مجموعة من الجلود والأجزاء والمكونات المستخدمة في صيانة غسالات LG وإصلاح الأعطال المختلفة.',

                'description_en' =>
                    'A range of seals, components, and parts used for LG washing machine maintenance and repair.',

                'image' => 'products/lg-washing-machine-components.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 5,
            ],

            [
                'name_ar' => 'قطع غيار أجهزة LG',
                'name_en' => 'LG Appliance Spare Parts',

                'slug' => 'lg-appliance-spare-parts',

                'description_ar' =>
                    'قطع غيار وحلول متنوعة لأجهزة LG، ويتم تحديد القطعة المناسبة بناءً على نوع الجهاز والموديل والعطل.',

                'description_en' =>
                    'Various spare parts and solutions for LG appliances, with the suitable part identified based on the appliance type, model, and fault.',

                'image' => 'products/lg-spare-parts.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 6,
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}