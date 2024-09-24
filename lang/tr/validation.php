<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute, tarihinden sonraki bir tarih olmalıdır :date.',
    'after_or_equal' => ':attribute , tarihten sonraki tarih veya ona eşit bir olmalıdır :tarih .',
    'alpha' => ':attribute yalnızca harf içerebilir.',
    'alpha_dash' => ':attribute yalnızca harf, rakam, tire ve alt çizgi içerebilir.',
    'alpha_num' => ':attribute yalnızca harf ve rakam içerebilir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute önce bir olmalıdır :date .',
    'before_or_equal' => ':attribute önce veya ona eşit bir olmalıdır :date .',
    'between' => [
        'numeric' => ':attribute:min ve:max arasında olmalıdır.',
        'file' => ':attribute:min ve:max kilobayt arasında olmalıdır.',
        'string' => ':attribute:min ve:max karakter arasında olmalıdır.',
        'array' => ':attribute:min ve:max öğeler arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute onayı eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_equals' => ':attribute, eşit bir olmalıdır:tarih .',
    'date_format' => ':attribute eşleşmiyor biçim:format.',
    'different' => ':attribute ve:other farklı olmalıdır.',
    'digits' => ':attribute şu olmalıdır:digits basamak.',
    'digits_between' => ':attribute:min ve:max basamak arasında olmalıdır.',
    'dimensions' => ':attribute resim boyutları geçersiz.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute aşağıdakilerden biriyle bitmelidir:values.',
    'exists' => 'Seçilen:attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanının bir değeri olmalıdır.',
    'gt' => [
        'numeric' => ':attribute değerinden büyük :value.',
        'file' => ':attribute şu değerden büyük olmalıdır:value kilobayt.',
        'string' => 'attribute birden fazla :value değerine sahip olmalıdır.',
        'array' => ':attribute birden fazla :değerine sahip olmalıdır.',
    ],
    'gte' => [
        'numeric' => ':attribute: değerinden büyük veya eşit olmalıdır :value.',
        'file' => ':attribute büyük veya eşit olmalıdır:value kilobayt.',
        'string' => ':attribute, :değer karakterlerinden büyük veya eşit olmalıdır.',
        'array' => ':attribute şunlar olmalıdır:value öğeleri veya daha fazlası.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen:attribute geçersiz.',
    'in_array' => ':attribute alanı:other lerinde :bulunmaz.',
    'integer' => ':attribute bir tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
    'lt' => [
        'numeric' => ':attribute küçük olmalıdır :value.',
        'file' => ':attribute den küçük olmalıdır:value kilobayt.',
        'string' => ':attribute inden küçük olmalıdır:value karakterleri.',
        'array' => ':attribute :value den az olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':attribute:value inden küçük veya eşit olmalıdır.',
        'file' => ':attribute eşit veya daha küçük olmalıdır:value kilobayt.',
        'string' => ':attribute, :value karakterlerinden küçük veya eşit olmalıdır.',
        'array' => ':attribute birden fazla :value değerine sahip olmamalıdır.',
    ],
    'max' => [
        'numeric' => ':attribute şu değerden büyük olamaz:max.',
        'file' => ':attribute en fazla:max kilobayt ola   maz.',
        'string' => ':attribute en fazla: max karakter olabilir.',
        'array' => ':attribute en fazla :max öğe içeremez.',
    ],
    'mimes' => ':attribute şu türden bir dosya olmalıdır::values.',
    'mimetypes' => ':attribute şu türden bir dosya olmalıdır::values.',
    'min' => [
        'numeric' => ':attribute en az: min olmalıdır.',
        'file' => ':attribute en az: min kilobayt olmalıdır.',
        'string' => ':attribute en az: min karakter olmalıdır.',
        'array' => ':attribute en az: min öğe olmalıdır.',
    ],
    'not_in' => 'Seçilen:attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => 'Şifre yanlış.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı zorunludur.',
    'required_if' => ':attribute alanı şu durumlarda gereklidir:other is:value.',
    'required_unless' => ':attribute: değerleri olmadığı sürece: :other is:value.',
    'required_with' => ':attribute alanı aşağıdaki durumlarda gereklidir :values mevcut.',
    'required_with_all' => ':attribute alanı aşağıdaki durumlarda gereklidir :values mevcut.',
    'required_without' => ':attribute alanı aşağıdaki durumlarda gereklidir :values mevcut olmayan.',
    'required_without_all' => ':attribute alanı, :values lerin hiçbiri olmadığında zorunludur.',
    'same' => ':attribute ve:other leriyle eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute: size olmalıdır.',
        'file' => ':attribute size olmalıdır:size kilobayt.',
        'string' => ':attribute:size karakterleri olmalıdır.',
        'array' => ':attribute şunları içermelidir:size öğeleri.',
    ],
    'starts_with' => ':attribute aşağıdakilerden biriyle başlamalıdır::values.',
    'string' => ':attribute bir dize olmalıdır.',
    'timezone' => ':attribute geçerli bir bölge olmalıdır.',
    'unique' => '這 :attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute biçimi geçersiz.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'özel mesaj',
        ],

        //doctor opd charge keys
        'doctor_id' => [
            'unique' => 'Doktorun adı zaten alınmış.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email' => __('messages.user.email'),
        'last_name' => __('messages.user.last_name'),
        'first_name' => __('messages.user.first_name'),
        'password' => __('messages.department'),
        'gender' => __('messages.user.gender'),
        'city' => __('messages.user.city'),
        'zip' => __('messages.user.zip'),
        'name' => __('messages.common.name'),
        'status' => __('messages.account.status'),
        'description' => __('messages.account.description'),
        'patient_id' => __('messages.invoice.patient_id'),
        'receipt_no' => __('messages.advanced_payment.receipt_no'),
        'amount' => __('messages.advanced_payment.amount'),
        'date' => __('messages.advanced_payment.date'),
        'vehicle_number' => __('messages.ambulance.vehicle_number'),
        'vehicle_model' => __('messages.ambulance.vehicle_model'),
        'driver_contact' => __('messages.ambulance.driver_contact'),
        'year_made' => __('messages.ambulance.year_made'),
        'driver_license' => __('messages.ambulance.driver_license'),
        'doctor_id' => __('messages.ipd_patient.doctor_id'),
        'opd_date' => __('messages.appointment.opd_date'),
        'bed_type' => __('messages.bed.bed_type'),
        'charge' => __('messages.bed.charge'),
        'bed_id' => __('messages.bed.bed_id'),
        'case_id' => __('messages.bed_assign.case_id'),
        'assign_date' => __('messages.bed_assign.assign_date'),
        'discharge_date' => __('messages.bed_assign.discharge_date'),
        'title' => __('messages.document.title'),
        'bill_date' => __('messages.bill.bill_date'),
        'qty' => __('messages.bill.qty'),
        'price' => __('messages.bill.price'),
        'blood_group' => __('messages.user.blood_group'),
        'remained_bags' => __('messages.hospital_blood_bank.remained_bags'),
        'bags' => __('messages.blood_donation.bags'),
        'last_donate_date' => __('messages.blood_donation.last_donate_date'),
        'issue_date' => __('messages.blood_issue.issue_date'),
        'remarks' => __('messages.blood_issue.remarks'),
        'charge_type' => __('messages.charge_category.charge_type'),
        'code' => __('messages.charge.code'),
        'standard_charge' => __('messages.charge.standard_charge'),
        'currency_name' => __('messages.currency.currency_name'),
        'currency_code' => __('messages.currency.currency_code'),
        'currency_icon' => __('messages.currency.currency_icon'),
        'sr_no' => __('messages.employee_payroll.sr_no'),
        'payroll_id' => __('messages.employee_payroll.payroll_id'),
        'type' => __('messages.account.type'),
        'month' => __('messages.employee_payroll.month'),
        'year' => __('messages.employee_payroll.year'),
        'net_salary' => __('messages.employee_payroll.net_salary'),
        'basic_salary' => __('messages.employee_payroll.basic_salary'),
        'message' => __('messages.enquiry.message'),
        'expense_head' => __('messages.expense.expense_head'),
        'invoice_number' => __('messages.expense.invoice_number'),
        'short_description' => __('messages.short_description'),
        'about_us_title' => __('messages.front_setting.about_us_title'),
        'about_us_mission' => __('messages.front_setting.about_us_mission'),
        'about_us_image' => __('messages.front_setting.about_us_image'),
        'income_head' => __('messages.incomes.income_head'),
        'service_tax' => __('messages.insurance.service_tax'),
        'insurance_no' => __('messages.insurance.insurance_no'),
        'insurance_code' => __('messages.insurance.insurance_code'),
        'discount' => __('messages.insurance.discount'),
        'disease_name' => __('messages.insurance.diseases_name'),
        'disease_charge' => __('messages.insurance.diseases_charge'),
        'invoice_date' => __('messages.invoice.invoice_date'),
        'quantity' => __('messages.service.quantity'),
        'total_payments' => __('messages.dashboard.total_payments'),
        'gross_total' => __('messages.ipd_bill.gross_total'),
        'discount_in_percentage' => __('messages.ipd_bill.discount_in_percentage'),
        'tax_in_percentage' => __('messages.ipd_bill.tax_in_percentage'),
        'other_charges' => __('messages.ipd_bill.other_charges'),
        'net_payable_amount' => __('messages.ipd_bill.net_payable_amount'),
        'charge_type_id' => __('messages.ipd_patient_charges.charge_type_id'),
        'charge_category_id' => __('messages.ipd_patient_charges.charge_category_id'),
        'charge_id' => __('messages.ipd_patient_charges.charge_id'),
        'applied_charge' => __('messages.ipd_patient_charges.applied_charge'),
        'instruction' => __('messages.ipd_patient_consultant_register.instruction'),
        'instruction_date' => __('messages.ipd_patient_consultant_register.instruction_date'),
        'report_type' => __('messages.ipd_patient_diagnosis.report_type'),
        'report_date' => __('messages.ipd_patient_diagnosis.report_date'),
        'bed_type_id' => __('messages.ipd_patient.bed_type_id'),
        'weight' => __('messages.ipd_patient.weight'),
        'height' => __('messages.ipd_patient.height'),
        'bp' => __('messages.ipd_patient.bp'),
        'payment_mode' => __('messages.ipd_payments.payment_mode'),
        'notes' => __('messages.document.notes'),
        'category_id' => __('messages.ipd_patient_prescription.category_id'),
        'issued_by' => __('messages.issued_item.issued_by'),
        'issued_date' => __('messages.issued_item.issued_date'),
        'return_date' => __('messages.issued_item.return_date'),
        'unit' => __('messages.item.unit'),
        'consultation_title' => __('messages.live_consultation.consultation_title'),
        'consultation_date' => __('messages.live_consultation.consultation_date'),
        'consultation_duration_minutes' => __('messages.live_consultation.consultation_duration_minutes'),
        'type_number' => __('messages.live_consultation.type_number'),
        'to' => __('messages.common.to'),
        'subject' => __('messages.email.subject'),
        'selling_price' => __('messages.medicine.selling_price'),
        'buying_price' => __('messages.medicine.buying_price'),
        'side_effects' => __('messages.medicine.side_effects'),
        'salt_composition' => __('messages.medicine.salt_composition'),
        'appointment_date' => __('messages.opd_patient.appointment_date'),
        'rate' => __('messages.package.rate'),
        'test_name' => __('messages.radiology_test.test_name'),
        'short_name' => __('messages.radiology_test.short_name'),
        'test_type' => __('messages.radiology_test.test_type'),
        'policy_no' => __('messages.patient_admission.policy_no'),
        'fee' => __('messages.case.fee'),
        'payment_date' => __('messages.payment.payment_date'),
        'pay_to' => __('messages.payment.pay_to'),
        'from_title' => __('messages.postal.from_title'),
        'to_title' => __('messages.postal.to_title'),
        'reference_no' => __('messages.postal.reference_no'),
        'subcategory' => __('messages.radiology_test.subcategory'),
        'available_on' => __('messages.schedule.available_on'),
        'available_from' => __('messages.schedule.available_from'),
        'available_to' => __('messages.schedule.available_to'),
        'per_patient_time' => __('messages.schedule.per_patient_time'),
        'app_name' => __('messages.setting.app_name'),
        'company_name' => __('messages.setting.company_name'),
        'favicon' => __('messages.setting.favicon'),
        'zoom_api_key' => __('messages.live_consultation.zoom_api_key'),
        'zoom_api_secret' => __('messages.live_consultation.zoom_api_secret'),
        'dose_given_date' => __('messages.vaccinated_patient.dose_given_date'),
        'manufactured_by' => __('messages.vaccination.manufactured_by'),
        'brand' => __('messages.vaccination.brand'),
        'purpose' => __('messages.visitor.purpose'),
        'no_of_person' => __('messages.visitor.number_of_person'),
        'in_time' => __('messages.visitor.in_time'),
        'out_time' => __('messages.visitor.out_time'),
        'field_name' => __('messages.custom_field.field_name')
    ],

];
