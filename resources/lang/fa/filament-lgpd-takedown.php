<?php

return [
    'resource' => [
        'label' => 'گزارش محتوا',
        'plural_label' => 'گزارش‌های محتوا',
    ],

    'sections' => [
        'notice' => 'گزارش',
        'decision' => 'تصمیم',
        'appeal' => 'اعتراض نویسنده',
    ],

    'fields' => [
        'content' => 'محتوا',
        'category' => 'دسته',
        'reporter' => 'گزارش‌دهنده',
        'reporter_email' => 'ایمیل گزارش‌دهنده',
        'reporter_role' => 'سمت گزارش‌دهنده',
        'reporter_flagged' => 'گزارش‌دهنده سوءاستفاده‌گر',
        'description' => 'توضیحات',
        'reported_at' => 'تاریخ گزارش',
        'status' => 'وضعیت',
        'automated' => 'تصمیم خودکار',
        'decision' => 'دلیل',
        'decided_at' => 'تاریخ تصمیم',
        'retain_until' => 'نگهداری تا',
        'authority_reported_at' => 'تاریخ گزارش به مقامات',
        'authority_protocol' => 'شماره پرونده',
        'author_notified_at' => 'تاریخ اطلاع به نویسنده',
        'appeal_until' => 'مهلت اعتراض',
        'appealed_at' => 'تاریخ اعتراض',
        'appeal' => 'اعتراض',
        'appeal_decision' => 'تصمیم درباره اعتراض',
        'restored_at' => 'تاریخ بازگردانی',
        'pending' => 'در انتظار',
        'restore' => 'بازگرداندن محتوا',
    ],

    'filters' => [
        'needs_action' => 'نیازمند اقدام',
    ],

    'pending' => [
        'authority' => 'گزارش به مقامات',
        'appeal' => 'تصمیم درباره اعتراض',
    ],

    'categories' => [
        'sexual_exploitation' => 'بهره‌کشی جنسی',
        'sexual_abuse' => 'سوءاستفاده جنسی',
        'kidnapping' => 'آدم‌ربایی',
        'grooming' => 'اغوای کودک',
        'violence' => 'خشونت',
        'self_harm' => 'آسیب به خود',
        'bullying' => 'قلدری',
        'gambling' => 'قمار',
        'predatory_advertising' => 'تبلیغات سوءاستفاده‌گرانه',
        'other' => 'سایر',
    ],

    'roles' => [
        'victim' => 'قربانی',
        'representative' => 'نماینده قربانی',
        'public_prosecutor' => 'دادستانی',
        'entity' => 'نهاد حمایت از کودک',
        'user' => 'کاربر',
    ],

    'status' => [
        'open' => 'باز',
        'removed' => 'حذف‌شده',
        'rejected' => 'ردشده',
    ],

    'help' => [
        'remove' => 'محتوا پنهان می‌شود و در مدت Marco Civil به‌عنوان مدرک نگهداری می‌شود. دلیل به نویسنده اعلام می‌شود و او می‌تواند اعتراض کند (قانون 15.211/2025، ماده 30).',
        'decision' => 'نویسنده این دلیل را خواهد دید.',
        'authority' => 'نشانه‌های بهره‌کشی، سوءاستفاده جنسی، آدم‌ربایی یا اغوا را به پلیس فدرال گزارش دهید (قانون 15.211/2025، ماده 27) و اینجا ثبت کنید.',
        'restore' => 'برای انتشار دوباره محتوا فعال کنید.',
    ],

    'actions' => [
        'remove' => 'حذف محتوا',
        'reject' => 'رد گزارش',
        'reported_to_authority' => 'به مقامات گزارش شد',
        'decide_appeal' => 'تصمیم درباره اعتراض',
    ],

    'notifications' => [
        'removed' => 'محتوا حذف شد.',
        'rejected' => 'گزارش رد شد.',
        'reported' => 'گزارش به مقامات ثبت شد.',
        'appeal_decided' => 'درباره اعتراض تصمیم گرفته شد.',
    ],
];
