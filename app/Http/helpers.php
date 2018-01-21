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
                'ins_company' => 'شركة التأمين'
            ],
            'HR' => [
    
            ]
        ];

        return $Resource[$lang][$key];
    }