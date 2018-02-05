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
                'additions' => 'إضافات',
                'recomendations' => 'توصيات',
                'init_damage_msg_1' => 'في حالة ظهور أضرار إضافية يجب استدعاء المخمن',
                'init_damage_msg_2' => 'القطع التي غيرت هي ملك شركة التأمين في حال وجود تغطية تأمينية',
                'init_damage_msg_3' => 'إقتراح العمل لا يجبر شركة التأمين لأي دفع',
                'garage_sig' => 'توقيع الكراج',
                'garage_phone' => 'تلفون الكراج',
                'visit_log' => 'كشف الزيارات',
                'car_color' => 'لون المركبة',
                'day' => 'اليوم',
                'visit_date' => 'تاريخ الزيارة',
                'car_work' => 'الأعمال للمركبة',
                'notes' => 'ملاحظات',
                'ins_company_acc_title' => 'كشف حساب شركة التأمين',
                'ins_company_num' => 'رقم شركة التأمين',
                'det' => 'تحديد',
                'init_damage_detect' => 'كشف أضرار أولي',
                'reg_date' => 'تاريخ التسجيل',
                'total_sum' => 'المجموع الكلي',
                'body_change' => 'غيار هيكل',
                'car_parts' => 'القطعة / أجزاء المركبة',
                'part_type' => 'نوع القطعة',
                'part_price' => 'سعر القطعة',
                'count' => 'العدد',
                'price' => 'الثمن',
                'part_code' => 'كود القطعة' ,
                'tax_value' => 'قيمة الضريبة',
                'tax_price' => 'الضريبة + الثمن',
                'consume_ammount' => 'مبلغ الاستهلاك',
                'money_to_pay' => 'المبلغ للدفع',
                'mech_part_change' => 'غيار قطع ميكانيك',
                'car_work' => 'أعمال مركبة',
                'maintain' => 'الصيانة',
                'value_ammount' => 'القيمة / المبلغ',
                'details' => 'تفاصيل',
                'degree' => 'الشهادة',
                'bank_stmnt_title' => 'شهادة تثمين',
                'address' => 'العنوان',
                'weight' => 'الوزن',
                'engine_size' => 'حجم المحرك',
                'car_owner_name' => 'إسم مالك المركبة',
                'car_owner_id' => 'رقم هوية مالك المركبة',
                'walk_power' => 'قوة التيسير',
                'car_color' => 'لون المركبة',
                'gas_type' => 'نوع الوقود',
                'pass_num' => 'عدد الركاب',
                'car_exam_result' => 'نتائج فحص المركبة',
                'front' => 'المقدمة',
                'right_side' => 'الجانب الأيمن',
                'left_side' => 'الجانب الأيسر',
                'back' => 'المؤخرة',
                'suspen_device' => 'جهاز التعليق',
                'engine' => 'المحرك',
                'gear_box' => 'علبة الغيارات',
                'front_face' => 'الهيئة الأمامية',
                'car_attachments' => 'إضافات المركبة',
                'guess_val' => 'قيمة التخمين',
                'ins_company_info' => 'معلومات شركة التامين',
                'car_down_table' => 'جدولة هبوط مركبة',
                'car_1' => 'المركبة الأولى',
                'car_2' => 'المركبة الثانية',
                'third_party_stmnt' => 'بيانات الطرف الثالث',
                'part' => 'القطعة',
                'maintenece' => 'الصيانة',
                'part_count' => 'عدد القطع',
                'work_ratio' => 'نسبة العمل',
                'down_ratio' => 'نسبة الهبوط',
                'total_down_ratio' => 'مجموع نسبة هبوط القيمة',
                'direct_damage' => 'الأضرار المباشرة',
                'total_drop_value' => 'مبلغ هبوط القيمة',
                'tech_damage_table' => 'جدولة الأضرار الفنية'
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