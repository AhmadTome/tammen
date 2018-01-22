<?php

    function _t($key,$lang = 'AR'){
        $Resource = [
            'AR' => [
                'car_num' => 'رقم المركبة',
                'file_num' => 'ملف رقم',
                'car_use' => 'إستعمال المركبة',
                'model_type' => 'النوع والطراز',
                'production_year' => 'سنة الانتاج',
                'body_num' => 'رقم الشاصي',
                'car_details' => 'بيانات المركبة',
                'production_date' => 'تاريخ الإصدار',
                'name' => 'الإسم',
                'ins_name' => 'إسم المؤمن',
                'ins_policy' => 'رقم بوليصة التأمين',
                'exam_place' => 'مكان الفحص',
                'car_model_num' => 'رقم طراز المركبة',
                'damage' => 'الضرر',
                'acc_date' => 'تاريخ الحادث',
                'exam_date' => 'تاريخ الفحص',
                'car_num' => 'رقم المركبة',
                'car_model' => 'طراز المركبة',
                'meter' => 'العداد',
                'car_desc_add' => 'مواصافة المركبة وإضافات',
                'damage_desc' => 'وصف الضرر',
                'jawwal' => 'تلفون جوال',
                'account_num' => 'رقم الحساب',
                'car_check_msg' => 'بناءاَ على طلبكم قمنا بفحص المركبة المدونة بياناتها أدناه أثر الحادث التي تعرضت له وكانت الأضرار على النحو التالي',
                'benif_name' => 'إسم المستفيد',
                'benif_name_HR' => 'إسم المستفيد عبري: ',
                'claim_num' => 'رقم الإدعاء',
                'surv_pay' => 'أجور تخمين',
                'travel' => 'سفريات',
                'picture' => 'تصوير',
                'disk_money' => 'مصاريف مكتب',
                'total' => 'المجموع',
                'for' => 'لحضرة',
                'city' => 'المدينة',
                'ins_company' => 'شركة التأمين',
                'car_destroy_title' => 'إعلام عن شطب مركبة',
                'guesser' => 'المخمن',
                'neg_num' => 'رفم التفويض',
                'sig_stamp' => 'التوقيع والختم',
                'car_price_calculate' => 'حساب سعر المركبة',
                'repair_calc' => 'مجموع مبلغ الأعمال / تصليح',
                'body_part_calc' => 'مجموع ثمن قطع غيار هيكل',
                'mech_part_calc' => 'مجموع ثمن قطع غيار ميكانيك',
                'down_calc' => 'مجموع نسبة الهبوط',
                'car_price' => 'سعر المركبة',
                'total_inc_down' => 'المبلغ الكلي للتعويض شامل هبوط القيمة',
                'direct_damage_total' => 'مبلغ تعويض الأضرار المباشرة',
                'damage_rate' => 'نسبة الضرر',
                'attachments' => 'مرفقات',
                'car_guess_notes' => 'ملاحظات تخمين مركبة',
                'rek_price' => 'ثمن الحطام',
                'final_price' => 'المبلغ النهائي للتعويض',
                'init_damage_report' => 'تقرير أضرار أولي',
                'visit_pay' => 'أجور زيارة',
                'garage_name' => 'إسم الكراج',
                'phone' => 'تلفون',
                'additions' => 'إضافات'
            ],
            'HR' => [
    
            ]
        ];

        return $Resource[$lang][$key];
    }

    function _td($count){
        for($i = 0;$i < $count; $i++){
            echo '<td></td>';
        }
    }