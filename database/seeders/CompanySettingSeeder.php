<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    public function run(): void
    {
        CompanySetting::updateOrCreate(
            ['id' => 1],
            [
                'company_name_en' => 'Senior LG Maintenance & Spare Parts',
                'company_name_ar' => 'سنيور لصيانة وقطع غيار LG',

                'email' => 'info@senior-lg.com',
                'phone' => '01025509311',
                'whatsapp' => '01025509311',

                'about_en' => <<<'TEXT'
Senior LG Maintenance & Spare Parts specializes in the maintenance, repair, and servicing of LG home appliances.

We provide professional maintenance services for LG washing machines and other LG appliances, with experienced technicians capable of diagnosing and repairing a wide range of technical problems.

We focus on providing fast, reliable, and professional maintenance services to help our customers get their appliances back to normal operation as quickly as possible.

Our services include appliance inspection, fault diagnosis, repair, maintenance, and spare parts replacement.

We also provide LG spare parts and focus on supplying reliable parts suitable for the required maintenance and repair.

Our team is committed to quality service, fast response, professional support, and customer satisfaction.
TEXT,

                'about_ar' => <<<'TEXT'
سنيور لصيانة وقطع غيار LG متخصص في صيانة وإصلاح أجهزة LG وتوفير قطع الغيار اللازمة لأعمال الصيانة.

نقدم خدمات صيانة احترافية لغسالات LG وغيرها من أجهزة LG، من خلال فريق من الفنيين ذوي الخبرة في تشخيص الأعطال وإصلاح المشكلات المختلفة بكفاءة وسرعة.

نحرص على تقديم خدمة سريعة وموثوقة لمساعدة عملائنا على إعادة أجهزتهم للعمل في أسرع وقت ممكن.

تشمل خدماتنا فحص الأجهزة، وتشخيص الأعطال، والإصلاح، والصيانة، واستبدال قطع الغيار.

كما نوفر قطع غيار لأجهزة LG، مع الحرص على توفير قطع مناسبة لأعمال الصيانة والإصلاح.

نضع جودة الخدمة وسرعة الاستجابة والدعم الاحترافي ورضا العملاء في مقدمة أولوياتنا.
TEXT,

                'vision_en' => <<<'TEXT'
To become a trusted and leading name in LG appliance maintenance and spare parts, recognized for fast service, professional technicians, reliable solutions, and excellent customer support.
TEXT,

                'vision_ar' => <<<'TEXT'
أن نصبح من الأسماء الموثوقة والرائدة في مجال صيانة أجهزة LG وتوفير قطع الغيار، من خلال تقديم خدمة سريعة وحلول موثوقة وفريق فني محترف ودعم متميز للعملاء.
TEXT,

                'mission_en' => <<<'TEXT'
Our mission is to provide LG appliance owners with professional, reliable, and efficient maintenance services.

We are committed to fast response, accurate fault diagnosis, professional repairs, suitable spare parts, and excellent customer service.

Our goal is to solve appliance problems efficiently and help our customers keep their LG appliances working properly.
TEXT,

                'mission_ar' => <<<'TEXT'
مهمتنا هي تقديم خدمات صيانة احترافية وموثوقة وفعالة لأصحاب أجهزة LG.

نلتزم بسرعة الاستجابة، وتشخيص الأعطال بدقة، وتنفيذ أعمال الإصلاح والصيانة باحترافية، وتوفير قطع الغيار المناسبة، مع تقديم خدمة عملاء متميزة.

هدفنا هو حل أعطال الأجهزة بكفاءة ومساعدة عملائنا على الحفاظ على أجهزة LG الخاصة بهم في أفضل حالة تشغيل ممكنة.
TEXT,

                'commitment_en' => <<<'TEXT'
We are committed to providing professional LG maintenance services and reliable spare parts solutions.

Our services include:

- LG Washing Machine Maintenance
- LG Appliance Repair
- Fault Diagnosis and Inspection
- Spare Parts Replacement
- LG Spare Parts Supply
- Fast Maintenance Response
- Professional Technical Support

We focus on quality, speed, reliability, and customer satisfaction.

For selected services, same-day maintenance may be available, subject to technician availability and service location.

We also offer a free fault inspection for the first contact of the day, according to the current service offer.

QUALITY SERVICE. RELIABLE SOLUTIONS. PROFESSIONAL SUPPORT.
TEXT,

                'commitment_ar' => <<<'TEXT'
نحن ملتزمون بتقديم خدمات صيانة احترافية لأجهزة LG وتوفير حلول موثوقة لقطع الغيار.

تشمل أهم خدماتنا:

- صيانة غسالات LG
- إصلاح أجهزة LG
- فحص وتشخيص الأعطال
- تغيير واستبدال قطع الغيار
- توفير قطع غيار LG
- سرعة الاستجابة لطلبات الصيانة
- دعم فني احترافي

نحرص على تقديم خدمة تتميز بالجودة والسرعة والاعتمادية ورضا العملاء.

تتوفر خدمة الصيانة في نفس اليوم لبعض الطلبات وفقًا لتوافر الفني وموقع العميل.

كما يتوفر كشف أعطال مجاني لأول اتصال في اليوم وفقًا للعرض الحالي للخدمة.

خدمة بجودة عالية. حلول موثوقة. دعم احترافي.
TEXT,

                'address_en' => 'Egypt',
                'address_ar' => 'مصر',
            ]
        );
    }
}