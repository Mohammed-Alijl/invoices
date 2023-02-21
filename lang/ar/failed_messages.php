<?php


return[
    //===================================================================================
    // PUBLIC============================================================================
    //===================================================================================
    'failed'=>'حدث خطأ ما الرجاء المحاولة مرة أخرى',
    'authorize'=>'أنت غير مصرح لك بالدخول',

    //===================================================================================
    // ATTACHMENTS=======================================================================
    //===================================================================================
    'attachment.add'=>'فشل اضافة المرفق الرجاء المحاولة مرة اخرى',
    'attachment.delete'=>'حدث خطأ أثناء محاولة حذف المرفق الرجاء المحاولة مرة أخرى',
    'attachment.invoice_id.required'=>'معرف الفاتورة مطلوب',
    'attachment.invoice_id.integer'=>'يجب ان يكون رقم الفاتورة رقما صحيحا',
    'attachment.invoice_id.exists'=>'الفاتورة المراد اضافة مرفق لها غير صحيحة',
    'attachment.invoice_number.required'=>'الرجاء ادخال رقم الفاتورة',
    'attachment.invoice_number.numeric'=>'يجب ان يكون رقم الفاتورة أرقام فقط',
    'attachment.invoice_number.exists'=>'يجب أن يكون رقم الفاتورة صحيحا',
    'attachment.pic.mimes'=>'يجب ان تكون صيغة المرفق pdf, jpeg ,.jpg , png',
    'attachment.pic.max'=>'حجم المرفق كبير للغاية',

    //===================================================================================
    // CUSTOMERS REPORTS=================================================================
    //===================================================================================
    'reports.section_id.required'=>'الرجاء اختيار بنك من الاختيارات',
    'reports.section_id.exists'=>'الرجاء اختيار بنك من الاختيارات',
    'reports.section_id.numeric'=>'الرجاء اختيار بنك من الاختيارات',
    'reports.section_id.min'=>'الرجاء اختيار البنك من الاختيارات',
    'reports.product_id.required'=>'الرجاء اختيار المعاملة من الاختيارات',
    'reports.product_id.exists'=>'الرجاء اختيار المعاملة من الاختيارات',
    'reports.product_id.numeric'=>'الرجاء اختيار المعاملة من الاختيارات',
    'reports.product_id.min'=>'الرجاء اختيار المعاملة من الاختيارات',
    'reports.start_at.date_format'=>'الرجاء الالتزام بتنسيق التاريخ اليوم-الشهر-السنة',
    'reports.start_at.before'=>'لا يمكن ان يكون تاريخ النهاية قبل تاريخ البداية',
    'reports.end_at.date_format'=>'الرجاء الالتزام بتنسيق التاريخ اليوم-الشهر-السنة',

    //===================================================================================
    // INVOICES==========================================================================
    //===================================================================================
    'invoices.add'=>'حدث خطا ما اثناء الاضافة الرجاء المحاولة مرة اخرى',
    'invoices.edit.notFound'=>'الفاتورة المطلوب تعديلها غير موجودة',
    'invoices.edit'=>'حدث خطا ما اثناء اضاقة التعديلات الرجاء المحاولة مرة اخرى',
    'invoices.destroy.notFound'=>'الفاتورة المراد حذفها غير موجودة',
    'invoices.destroy'=>'حدث خطا اثناء محاولة حذف الفاتورة, الرجاء المحاولة مرة اخرى',
    'invoices.archive.notFound'=>'الفاتورة المراد أرشفتها غير موجودة',
    'invoices.archive'=>'حدث خطا اثناء محاولة أرشفة الفاتورة',
    'invoices.recovery'=>'حدث خطا اثناء محاولة أرشفة الفاتورة',
    'invoices.print.notFound'=>'الفاتورة المراد طباعتها غير موجودة',
    'invoices.invoice_number.required'=>'الرجاء ادخال رقم الفاتورة',
    'invoices.invoice_number.unique'=>'رقم الفاتورة هذا مستخدم بالفعل الرجاء اختيار رقم اخر',
    'invoices.invoice_number.min'=>'رقم الفاتورة يجب ان يكون رقم موجب',
    'invoices.invoice_number.max'=>'رقم الفاتورة اكبر من المسموح به',
    'invoices.invoice_number.numeric'=>'يجب ان يكون رقم الفاتورة أرقام فقط',
    'invoices.invoice_date.required'=>'الرجاء ادخال تاريخ الفاتورة',
    'invoices.invoice_date.date'=>'الرجاء ادخال تاريخ صحيح',
    'invoices.invoice_date.date_format'=>'يجب ان يكون تنسيق التاريخ Y-m-d',
    'invoices.due_date.required'=>'الرجاء ادخال تاريخ الاستحقاق',
    'invoices.due_date.date'=>'الرجاء ادخال تاريخ صحيح',
    'invoices.due_date.date_format'=>'يجب ان يكون تنسيق التاريخ Y-m-d',
    'invoices.due_date.after_or_equal'=>'يجب ان يكون تاريخ الاستحقاق اكبر من تاريخ الفاتورة او مساوي له',
    'invoices.section_id.required'=>'الرجاء اختيار بنك من الاختيارات',
    'invoices.section_id.exists'=>'الرجاء اختيار بنك من الاختيارات',
    'invoices.section_id.numeric'=>'الرجاء اختيار البنك من الاختيارات',
    'invoices.section_id.min'=>'الرجاء اختيار البنك من الاختيارات',
    'invoices.product_id.required'=>'الرجاء اختيار المعاملة من الاختيارات',
    'invoices.product_id.exists'=>'الرجاء اختيار المعاملة من الاختيارات',
    'invoices.product_id.numeric'=>'الرجاء اختيار المعاملة من الاختيارات',
    'invoices.product_id.min'=>'الرجاء اختيار المعاملة من الاختيارات',
    'invoices.discount.required'=>'الرجاء ادخال الخصم وفي حال عدم وجود خصم ادخال صفر',
    'invoices.discount.numeric'=>'الرجاء ادخال ارقام فقط',
    'invoices.discount.lte'=>' يجب ان يكون مبلغ الخصم اقل من مبلغ العمولة',
    'invoices.discount.min'=>'لا يمكن ان يكون مبلغ العمولة بسالب',
    'invoices.amount_commission.required'=>'الرجاء ادخال مبلغ العمولة',
    'invoices.amount_commission.numeric'=>'يجب ان يكون مبلغ العمولة ارقام فقط',
    'invoices.amount_commission.lte'=>'يجب ان يكون مبلغ العمولة اقل من مبلغ التحصيل',
    'invoices.amount_commission.min'=>'مبلغ العمولة اقل من المسموح به',
    'invoices.amount_collection.required'=>'مبلغ التحصيل مطلوب',
    'invoices.amount_collection.numeric'=>'مبلغ التحصيل يجب ان يكون ارقام فقط',
    'invoices.amount_collection.max'=>'مبلغ التحصيل اكبر من المسموح به',
    'invoices.amount_collection.min'=>'مبلغ التحصيل اقل من المسموح به',
    'invoices.note.string'=>'يجب ان تكون الملاحظات عبارة عن نصوص',
    'invoices.note.max'=>'الملاحظات اكبر من اللازم',
    'invoices.rate_vat.required'=>'يجب ان تكون نسبة ضريبة القيمة المضافة 5% او 10%',
    'invoices.rate_vat.in'=>'يجب ان تكون نسبة ضريبة القيمة المضافة 5% او 10%',
    'invoices.pic.mimes'=>'يجب ان تكون صيغة المرفق pdf, jpeg ,.jpg , png',
    'invoices.pic.max'=>'حجم المرفق كبير للغاية',

    //===================================================================================
    // INVOICES REPORTS==================================================================
    //===================================================================================
    'reports.radio.required'=>'الرجاء اختيار طريقة البحث',
    'reports.radio.in'=>'الرجاء اختيار طريقة البحث',
    'reports.status.required_if'=>'الرجاء تحديد نوع الفواتير',
    'reports.status.in'=>'الرجاء تحديد نوع الفواتير',
    'reports.invoice_number.required_if'=>'الرجاء ادخال رقم الفاتورة',

    //===================================================================================
    // PAYMENTS==========================================================================
    //===================================================================================
    'payments.change.notFound'=>'الفاتورة المراد تعديل حالة الدفع لها غير موجودة',
    'payments.collection_amount.required'=>'المبلغ المدفوع مطلوب',
    'payments.collection_amount.numeric'=>'المبلغ المدفوع يجب ان يكون ارقام فقط',
    'payments.collection_amount.min'=>'الرجاء ادخال 1 على الاقل',
    'payments.note.max'=>'الملاحظة أكبر من اللازم',
    'payments.collection.less.rest'=>'لا يجب ان يكون المبلغ المدفوع أكبر من المبلغ المستحق',

    //===================================================================================
    // PRODUCTS==========================================================================
    //===================================================================================
    'product.name.required'=>'اسم المعاملة مطلوب',
    'product.notFound'=>'هذا المعاملة غير موجود',
    'product.name.max'=>'يجب ان يكون اسم المعاملة اقل من 30 حرفا',
    'product.name.unique'=>'هذا المعاملة موجود بالفعل',
    'product.description.required'=>'الوصف مطلوب',
    'product.description.min'=>'يجب ان يكون وصف المعاملة 10 حروف على الاقل',
    'product.description.max'=>'وصف المعاملة اكبر من اللازم',
    'product.section_id.exists'=>'هذا البنك غير موجود',
    'product.section_name.exists'=>'هذا البنك غير موجود',

    //===================================================================================
    // SECTIONS==========================================================================
    //===================================================================================
    'section.section_name.required'=>'اسم البنك مطلوب',
    'section.notFound'=> 'هذا البنك غير موجود',
    'section.section_name.unique'=>'هذا البنك موجود بالفعل',
    'section.section_name.min'=>'اسم البنك قصير للغاية',
    'section.section_name.max'=>'يجب ان يكون اسم البنك اقل من 30 حرف',
    'section.description.required'=>'حقل الوصف مطلوب',
    'section.description.max'=>'الوصف اطول من اللازم',
    'section.name.required'=>'اسم البنك مطلوب',
    'section.name.unique'=>'هذا البنك موجود بالفعل',
    'section.name.min'=>'اسم البنك قصير للغاية',
    'section.name.max'=>'يجب ان يكون اسم البنك اقل من 30 حرف',

    //===================================================================================
    // USERS=============================================================================
    //===================================================================================
    'user.notFound'=>'عذرا هذا المستخدم غير موجود',
    'user.destroy.notFound'=>'المستخدم الذي تحاول حذفه غير موجود',
    'user.name.unique'=>'اسم المستخدم مستخدم بالفعل, الرجاء الاختيار اسم مستخدم أخر',
    'user.name.max'=>'اسم المستخدم أطول من اللازم',
    'user.email.email'=>'الرجاء ادخال بريد الكتروني صحيح',
    'user.email.unique'=>'هذا البريد الالكتروني مستخدم بالفعل',
    'user.password.same'=>'كلمة السر وتأكيدها غير متطابقان الرجاء المحاولة مرة اخرى',
    'user.roles_name.array'=>'حدث خطأ ما الرجاء المحاولة مرة اخرى',
    'user.roles_name.exists'=>'حدث خطأ ما الرجاء المحاولة مرة أخرى',
    'user.pic.mimes'=>'يجب اختيار صورة منا امتداد: jpeg, jpg, png, svg',
    'user.pic.max'=>'حجم الصورة كبير حدا الرجاء اختيار صورة شخصية بحجم أقل',
];
