<?php

return [
    'resource' => [
        'label' => 'İçerik bildirimi',
        'plural_label' => 'İçerik bildirimleri',
    ],

    'sections' => [
        'notice' => 'Bildirim',
        'decision' => 'Karar',
        'appeal' => 'Yazarın itirazı',
    ],

    'fields' => [
        'content' => 'İçerik',
        'category' => 'Kategori',
        'reporter' => 'Bildiren',
        'reporter_email' => 'Bildirenin e-postası',
        'reporter_role' => 'Bildirenin sıfatı',
        'reporter_flagged' => 'Kötüye kullanan bildiren',
        'description' => 'Açıklama',
        'reported_at' => 'Bildirim tarihi',
        'status' => 'Durum',
        'automated' => 'Otomatik karar',
        'decision' => 'Gerekçe',
        'decided_at' => 'Karar tarihi',
        'retain_until' => 'Saklama sonu',
        'authority_reported_at' => 'Yetkililere bildirim tarihi',
        'authority_protocol' => 'Protokol',
        'author_notified_at' => 'Yazara bildirim tarihi',
        'appeal_until' => 'İtiraz süresi',
        'appealed_at' => 'İtiraz tarihi',
        'appeal' => 'İtiraz',
        'appeal_decision' => 'İtiraz kararı',
        'restored_at' => 'Geri yükleme tarihi',
        'pending' => 'Bekleyen',
        'restore' => 'İçeriği geri yükle',
    ],

    'filters' => [
        'needs_action' => 'İşlem gerekli',
    ],

    'pending' => [
        'authority' => 'Yetkililere bildir',
        'appeal' => 'İtirazı karara bağla',
    ],

    'categories' => [
        'sexual_exploitation' => 'Cinsel sömürü',
        'sexual_abuse' => 'Cinsel istismar',
        'kidnapping' => 'Kaçırma',
        'grooming' => 'Çocuk kandırma (grooming)',
        'violence' => 'Şiddet',
        'self_harm' => 'Kendine zarar',
        'bullying' => 'Zorbalık',
        'gambling' => 'Kumar',
        'predatory_advertising' => 'Sömürücü reklam',
        'other' => 'Diğer',
    ],

    'roles' => [
        'victim' => 'Mağdur',
        'representative' => 'Mağdurun temsilcisi',
        'public_prosecutor' => 'Savcılık',
        'entity' => 'Çocuk koruma kuruluşu',
        'user' => 'Kullanıcı',
    ],

    'status' => [
        'open' => 'Açık',
        'removed' => 'Kaldırıldı',
        'rejected' => 'Reddedildi',
    ],

    'help' => [
        'remove' => 'İçerik gizlenir ve Marco Civil süresi boyunca delil olarak saklanır. Yazara gerekçe bildirilir ve itiraz edebilir (Kanun 15.211/2025, md. 30).',
        'decision' => 'Yazar bu gerekçeyi görecek.',
        'authority' => 'Sömürü, cinsel istismar, kaçırma veya grooming belirtilerini Federal Polise bildirin (Kanun 15.211/2025, md. 27), sonra burada kaydedin.',
        'restore' => 'İçeriği yeniden yayına almak için açın.',
    ],

    'actions' => [
        'remove' => 'İçeriği kaldır',
        'reject' => 'Bildirimi reddet',
        'reported_to_authority' => 'Yetkililere bildirildi',
        'decide_appeal' => 'İtirazı karara bağla',
    ],

    'notifications' => [
        'removed' => 'İçerik kaldırıldı.',
        'rejected' => 'Bildirim reddedildi.',
        'reported' => 'Yetkililere bildirim kaydedildi.',
        'appeal_decided' => 'İtiraz karara bağlandı.',
    ],
];
