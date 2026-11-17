<?php

return [
    'resource' => [
        'label' => 'Kontent haqida shikoyat',
        'plural_label' => 'Kontent haqida shikoyatlar',
    ],

    'sections' => [
        'notice' => 'Shikoyat',
        'decision' => 'Qaror',
        'appeal' => 'Muallifning e\'tirozi',
    ],

    'fields' => [
        'content' => 'Kontent',
        'category' => 'Toifa',
        'reporter' => 'Shikoyatchi',
        'reporter_email' => 'Shikoyatchining e-pochtasi',
        'reporter_role' => 'Shikoyatchining maqomi',
        'reporter_flagged' => 'Suiiste\'mol qiluvchi shikoyatchi',
        'description' => 'Tavsif',
        'reported_at' => 'Shikoyat sanasi',
        'status' => 'Holat',
        'automated' => 'Avtomatik qaror',
        'decision' => 'Sabab',
        'decided_at' => 'Qaror sanasi',
        'retain_until' => 'Saqlanadi',
        'authority_reported_at' => 'Organlarga xabar berilgan sana',
        'authority_protocol' => 'Bayonnoma raqami',
        'author_notified_at' => 'Muallif xabardor qilingan sana',
        'appeal_until' => 'E\'tiroz muddati',
        'appealed_at' => 'E\'tiroz sanasi',
        'appeal' => 'E\'tiroz',
        'appeal_decision' => 'E\'tiroz bo\'yicha qaror',
        'restored_at' => 'Tiklangan sana',
        'pending' => 'Kutilmoqda',
        'restore' => 'Kontentni tiklash',
    ],

    'filters' => [
        'needs_action' => 'Harakat talab etiladi',
    ],

    'pending' => [
        'authority' => 'Organlarga xabar berish',
        'appeal' => 'E\'tirozni hal qilish',
    ],

    'categories' => [
        'sexual_exploitation' => 'Jinsiy ekspluatatsiya',
        'sexual_abuse' => 'Jinsiy zo\'ravonlik',
        'kidnapping' => 'O\'g\'irlash',
        'grooming' => 'Grooming (aldab jalb qilish)',
        'violence' => 'Zo\'ravonlik',
        'self_harm' => 'O\'ziga zarar yetkazish',
        'bullying' => 'Bezorilik',
        'gambling' => 'Qimor',
        'predatory_advertising' => 'Yirtqich reklama',
        'other' => 'Boshqa',
    ],

    'roles' => [
        'victim' => 'Jabrlanuvchi',
        'representative' => 'Jabrlanuvchining vakili',
        'public_prosecutor' => 'Prokuratura',
        'entity' => 'Bolalarni himoya qilish tashkiloti',
        'user' => 'Foydalanuvchi',
    ],

    'status' => [
        'open' => 'Ochiq',
        'removed' => 'O\'chirilgan',
        'rejected' => 'Rad etilgan',
    ],

    'help' => [
        'remove' => 'Kontent yashiriladi va Marco Civil muddati davomida dalil sifatida saqlanadi. Muallifga sabab bildiriladi va u e\'tiroz bildirishi mumkin (Qonun 15.211/2025, 30-modda).',
        'decision' => 'Muallif bu sababni ko\'radi.',
        'authority' => 'Ekspluatatsiya, jinsiy zo\'ravonlik, o\'g\'irlash yoki grooming belgilarini Federal politsiyaga xabar qiling (Qonun 15.211/2025, 27-modda) va shu yerda qayd eting.',
        'restore' => 'Kontentni qayta e\'lon qilish uchun yoqing.',
    ],

    'actions' => [
        'remove' => 'Kontentni o\'chirish',
        'reject' => 'Shikoyatni rad etish',
        'reported_to_authority' => 'Organlarga xabar berildi',
        'decide_appeal' => 'E\'tirozni hal qilish',
    ],

    'notifications' => [
        'removed' => 'Kontent o\'chirildi.',
        'rejected' => 'Shikoyat rad etildi.',
        'reported' => 'Organlarga xabar qayd etildi.',
        'appeal_decided' => 'E\'tiroz hal qilindi.',
    ],
];
