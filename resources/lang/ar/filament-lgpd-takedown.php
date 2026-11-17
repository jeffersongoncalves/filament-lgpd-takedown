<?php

return [
    'resource' => [
        'label' => 'بلاغ عن محتوى',
        'plural_label' => 'بلاغات المحتوى',
    ],

    'sections' => [
        'notice' => 'البلاغ',
        'decision' => 'القرار',
        'appeal' => 'طعن المؤلف',
    ],

    'fields' => [
        'content' => 'المحتوى',
        'category' => 'الفئة',
        'reporter' => 'المُبلِّغ',
        'reporter_email' => 'بريد المُبلِّغ',
        'reporter_role' => 'صفة المُبلِّغ',
        'reporter_flagged' => 'مُبلِّغ مسيء',
        'description' => 'الوصف',
        'reported_at' => 'تاريخ البلاغ',
        'status' => 'الحالة',
        'automated' => 'قرار آلي',
        'decision' => 'السبب',
        'decided_at' => 'تاريخ القرار',
        'retain_until' => 'محفوظ حتى',
        'authority_reported_at' => 'تاريخ الإبلاغ للسلطات',
        'authority_protocol' => 'رقم البروتوكول',
        'author_notified_at' => 'تاريخ إخطار المؤلف',
        'appeal_until' => 'الطعن حتى',
        'appealed_at' => 'تاريخ الطعن',
        'appeal' => 'الطعن',
        'appeal_decision' => 'قرار الطعن',
        'restored_at' => 'تاريخ الإعادة',
        'pending' => 'معلّق',
        'restore' => 'إعادة المحتوى',
    ],

    'filters' => [
        'needs_action' => 'يحتاج إلى إجراء',
    ],

    'pending' => [
        'authority' => 'الإبلاغ للسلطات',
        'appeal' => 'البت في الطعن',
    ],

    'categories' => [
        'sexual_exploitation' => 'استغلال جنسي',
        'sexual_abuse' => 'اعتداء جنسي',
        'kidnapping' => 'اختطاف',
        'grooming' => 'استدراج',
        'violence' => 'عنف',
        'self_harm' => 'إيذاء النفس',
        'bullying' => 'تنمّر',
        'gambling' => 'مقامرة',
        'predatory_advertising' => 'إعلانات استغلالية',
        'other' => 'أخرى',
    ],

    'roles' => [
        'victim' => 'الضحية',
        'representative' => 'ممثل الضحية',
        'public_prosecutor' => 'النيابة العامة',
        'entity' => 'جهة حماية الطفل',
        'user' => 'مستخدم',
    ],

    'status' => [
        'open' => 'مفتوح',
        'removed' => 'تمت الإزالة',
        'rejected' => 'مرفوض',
    ],

    'help' => [
        'remove' => 'يُخفى المحتوى ويُحفظ كدليل طوال مدة Marco Civil. يُبلَّغ المؤلف بالسبب ويمكنه الطعن (القانون 15.211/2025، المادة 30).',
        'decision' => 'سيرى المؤلف هذا السبب.',
        'authority' => 'أبلغ الشرطة الاتحادية بمؤشرات الاستغلال أو الاعتداء الجنسي أو الاختطاف أو الاستدراج (القانون 15.211/2025، المادة 27)، ثم سجّل ذلك هنا.',
        'restore' => 'فعّل لإعادة المحتوى إلى النشر.',
    ],

    'actions' => [
        'remove' => 'إزالة المحتوى',
        'reject' => 'رفض البلاغ',
        'reported_to_authority' => 'تم الإبلاغ للسلطات',
        'decide_appeal' => 'البت في الطعن',
    ],

    'notifications' => [
        'removed' => 'تمت إزالة المحتوى.',
        'rejected' => 'تم رفض البلاغ.',
        'reported' => 'تم تسجيل الإبلاغ للسلطات.',
        'appeal_decided' => 'تم البت في الطعن.',
    ],
];
