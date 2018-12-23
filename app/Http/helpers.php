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
                'ins_policy' => 'رقم ليصة التأمين',
                'exam_place' => 'مكان الفحص',
                'car_model_num' => 'رقم طراز المركبة',
                'damage' => 'الضرر',
                'acc_date' => 'تاريخ الحادث',
                'exam_date' => 'تاريخ الفحص',
                'car_num' => 'رقم المركبة',
                'car_model' => 'طراز المركبة',
                'meter' => 'العداد',
                'car_desc_add' => 'مواصفات المركبة وإضافات',
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
                'down_calc' => 'مجموع مبلغ الهبوط',
                'damagePercentSummation'=>'مجموع نسبة الأضرار الفنية',
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
                'tech_damage_table' => 'جدولة الأضرار الفنية',
                'claim_type' => 'نوع المطالبة',
                'claim_money' => 'مبلغ المطالبة',
                'report_fees' => 'رسوم التقرير',
                'with_respect_message' => 'وتفضلو بقبول فائق الاحترام',
                'discount' => 'الخصم'
            ],
            'HR' => [
                'car_num' => 'מספר רישוי',
                'file_num' => 'תיק מס',
                'car_use' => 'סוג הרכב',
                'model_type' => 'תוצרת ודגם',
                'production_year' => 'שנה יצור',
                'body_num' => 'מספר שלדה',
                'car_details' => 'נתוני רכב',
                'production_date' => 'תאריך',
                'name' => 'שם',
                'ins_name' => 'שם המבוטח',
                'ins_policy' => 'פוליסה מס',
                'exam_place' => 'מקום הבדיקה',
                'car_model_num' => 'דגם מס',
                'damage' => 'סוג מקרה',
                'acc_date' => 'תאריך נזק',
                'exam_date' => 'תאריך הבדיקה',
                'car_num' => 'מספר רישוי',
                'damagePercentSummation'=>'סך כל הנזקים הטכניים',
                'car_model' => 'דגם הרכב',
                'meter' => 'מד אוץ',
                'car_desc_add' => 'מפרט הרכב ותוספות',
                'damage_desc' => 'תיאור הנזק',
                'jawwal' => 'טל מס',
                'account_num' => 'חשבון מס',
                'car_check_msg' => 'בהתאם לבקשתך בדקנו רכבך אשר ניזוק לדבריך בתאונת דרכים',
                'benif_name' => 'לכבוד',
                'benif_name_HR' => 'לכבוד',
                'claim_num' => 'מס התביעה',
                'surv_pay' => 'שמאות',
                'travel' => 'ניסעות',
                'picture' => 'צילומים',
                'disk_money' => 'הצאות משרד',
                'total' => 'סה"כ לתשלום',
                'for' => 'ל',
                'city' => 'כפר',
                'ins_company' => 'חפרת הבטוח',
                'car_destroy_title' => 'הודעה על ביטול רכב',
                'guesser' => 'השמאי',
                'neg_num' => 'מספר אישור',
                'sig_stamp' => 'חתמה',
                'car_price_calculate' => 'חישוב מחיר הרכב',
                'repair_calc' => 'סך כל העסקים',
                'body_part_calc' => 'סה"כ כמות של חתיכות',
                'mech_part_calc' => 'סה"כ מחיר חלקי מכני',
                'down_calc' => 'סך כל שיעור הירידה',
                'car_price' => 'מחיר הרכב',
                'total_inc_down' => 'סכום הפיצוי הכולל כולל את ירידת הערך',
                'direct_damage_total' => 'סה"כ נזקים ישירים',
                'damage_rate' => 'אחוז נזק',
                'attachments' => 'לוטה',
                'car_guess_notes' => 'הערות',
                'rek_price' => 'סה"כ ',
                'final_price' => 'הסכום הסופי של פיצוי',
                'init_damage_report' => 'דו"ח נזק ראשוני',
                'visit_pay' => 'סה"כ ביקורת',
                'garage_name' => 'שם המוסך',
                'phone' => 'טל',
                'additions' => 'תוספות',
                'recomendations' => 'המלצות',
                'init_damage_msg_1' => 'במקרה של נזק נוסף, שמאי חייב להיות נקרא',
                'init_damage_msg_2' => 'החלקים ששינו הם רכוש חברת הביטוח במקרה של כיסוי ביטוחי',
                'init_damage_msg_3' => 'פעולה מוצעת אינה מכריחה את חברת הביטוח לשלם',
                'garage_sig' => 'חתמהת המוסך',
                'garage_phone' => 'טל המוסך',
                'visit_log' => 'איתור ביקורים',
                'car_color' => 'צבע',
                'day' => 'היום',
                'visit_date' => 'תאריך הביקור',
                'car_work' => 'עבודות של הרכב',
                'notes' => 'הערות',
                'ins_company_acc_title' => 'הצהרת חברה לביטוח',
                'ins_company_num' => 'מספר חברה הביטוח',
                'det' => 'קביעה',
                'init_damage_detect' => 'גילוי ראשוני של נזק',
                'reg_date' => 'תאריך',
                'total_sum' => 'סך כולל',
                'body_change' => 'חלקי חילוף',
                'car_parts' => 'חלק',
                'part_type' => 'סוג החלק',
                'part_price' => 'מחיר החלק',
                'count' => 'כמות',
                'price' => 'מחיר',
                'part_code' => 'מק"ט' ,
                'tax_value' => 'שווי המס',
                'tax_price' => 'המחיר כולל מס',
                'consume_ammount' => 'סכום הפחת',
                'money_to_pay' => 'סכום לשלם',
                'mech_part_change' => 'חלקי חילוף מכניים',
                'car_work' => 'פירות עבודה',
                'maintain' => 'תחזוקה',
                'value_ammount' => 'סה"כ',
                'details' => 'פירות',
                'degree' => 'השכלתו ונסיונו',
                'bank_stmnt_title' => 'תעודת גבורה',
                'address' => 'כתובת',
                'weight' => 'משקל',
                'engine_size' => 'כוח מנוע',
                'car_owner_name' => 'שם בעל הרכב',
                'car_owner_id' => 'מספר הזיהוי של בעל הרכב',
                'walk_power' => 'הנעה',
                'car_color' => 'צבע',
                'gas_type' => 'סוג דלק',
                'pass_num' => 'נוסעים מורשים',
                'car_exam_result' => 'תוצאות בדיקת הרכב',
                'front' => 'צד קדמי',
                'right_side' => 'צד ימין',
                'left_side' => 'צד שמאל',
                'back' => 'צד אחורי',
                'suspen_device' => 'התקן השעיה',
                'engine' => 'מנוע',
                'gear_box' => 'חבילת מילוי',
                'front_face' => 'גוף קדמי',
                'car_attachments' => 'תוספות רכב',
                'guess_val' => 'ערכי הערכה',
                'ins_company_info' => 'מידע על חברת הביטוח',
                'car_down_table' => 'לוח הזמנים שלה ירידה ערך',
                'car_1' => 'הרכב הראשון',
                'car_2' => 'הרכב השני',
                'third_party_stmnt' => 'נתוני צד שלישי',
                'part' => 'חלק',
                'maintenece' => 'תחזוקה',
                'part_count' => 'כמות',
                'work_ratio' => 'אחוז',
                'down_ratio' => 'אחוז ירדת ערך',
                'total_down_ratio' => 'סך כל שיעור הירידה',
                'direct_damage' => 'נזקים ישרים',
                'total_drop_value' => 'סה"כ ירדת ערך',
                'tech_damage_table' => 'תזמון נזק טכני',
                'claim_type' => 'סוג התביעה',
                'claim_money' => 'דמי דווח',
                'report_fees' => 'דמי דווח',
                'with_respect_message' => 'בכבוד רב',
                'discount' => 'הנחה'
            ]
        ];

        return $Resource[$lang][$key];
    }

    function _td($count){
        for($i = 0;$i < $count; $i++){
            echo '<td></td>';
        }
    }

    function tax(){
        return env('TAX_VALUE',0);
    }

    function calcTax($amuont){
        return $amuont * tax();
    }

    function toPercentage($per){
        return str_replace("%","",$per) / 100;
    }