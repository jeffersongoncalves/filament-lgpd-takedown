<?php

return [
    'resource' => [
        'label' => 'Məzmun şikayəti',
        'plural_label' => 'Məzmun şikayətləri',
    ],

    'sections' => [
        'notice' => 'Şikayət',
        'decision' => 'Qərar',
        'appeal' => 'Müəllifin etirazı',
    ],

    'fields' => [
        'content' => 'Məzmun',
        'category' => 'Kateqoriya',
        'reporter' => 'Şikayətçi',
        'reporter_email' => 'Şikayətçinin e-poçtu',
        'reporter_role' => 'Şikayətçinin statusu',
        'reporter_flagged' => 'Sui-istifadəçi şikayətçi',
        'description' => 'Təsvir',
        'reported_at' => 'Şikayət tarixi',
        'status' => 'Status',
        'automated' => 'Avtomatik qərar',
        'decision' => 'Səbəb',
        'decided_at' => 'Qərar tarixi',
        'retain_until' => 'Saxlanılır',
        'authority_reported_at' => 'Orqanlara bildirilib',
        'authority_protocol' => 'Protokol',
        'author_notified_at' => 'Müəllif xəbərdar edilib',
        'appeal_until' => 'Etiraz müddəti',
        'appealed_at' => 'Etiraz tarixi',
        'appeal' => 'Etiraz',
        'appeal_decision' => 'Etiraz üzrə qərar',
        'restored_at' => 'Bərpa edilib',
        'pending' => 'Gözləyən',
        'restore' => 'Məzmunu bərpa et',
    ],

    'filters' => [
        'needs_action' => 'Tədbir tələb olunur',
    ],

    'pending' => [
        'authority' => 'Orqanlara bildir',
        'appeal' => 'Etirazı həll et',
    ],

    'categories' => [
        'sexual_exploitation' => 'Cinsi istismar',
        'sexual_abuse' => 'Cinsi zorakılıq',
        'kidnapping' => 'Oğurlanma',
        'grooming' => 'Yoldan çıxarma',
        'violence' => 'Zorakılıq',
        'self_harm' => 'Özünə zərər',
        'bullying' => 'Zorbalıq',
        'gambling' => 'Qumar',
        'predatory_advertising' => 'Yırtıcı reklam',
        'other' => 'Digər',
    ],

    'roles' => [
        'victim' => 'Zərərçəkmiş',
        'representative' => 'Zərərçəkmişin nümayəndəsi',
        'public_prosecutor' => 'Prokurorluq',
        'entity' => 'Uşaq hüquqları təşkilatı',
        'user' => 'İstifadəçi',
    ],

    'status' => [
        'open' => 'Açıq',
        'removed' => 'Silinib',
        'rejected' => 'Rədd edilib',
    ],

    'help' => [
        'remove' => 'Məzmun gizlədilir və Marco Civil müddəti ərzində sübut kimi saxlanılır. Müəllifə səbəb bildirilir və o, etiraz edə bilər (Qanun 15.211/2025, maddə 30).',
        'decision' => 'Müəllif bu səbəbi görəcək.',
        'authority' => 'İstismar, cinsi zorakılıq, oğurlanma və ya yoldan çıxarma əlamətlərini Federal Polisə bildirin (Qanun 15.211/2025, maddə 27), sonra burada qeyd edin.',
        'restore' => 'Məzmunu yenidən yayımlamaq üçün aktivləşdirin.',
    ],

    'actions' => [
        'remove' => 'Məzmunu sil',
        'reject' => 'Şikayəti rədd et',
        'reported_to_authority' => 'Orqanlara bildirilib',
        'decide_appeal' => 'Etirazı həll et',
    ],

    'notifications' => [
        'removed' => 'Məzmun silindi.',
        'rejected' => 'Şikayət rədd edildi.',
        'reported' => 'Orqanlara bildiriş qeydə alındı.',
        'appeal_decided' => 'Etiraz həll edildi.',
    ],
];
