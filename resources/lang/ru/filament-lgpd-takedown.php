<?php

return [
    'resource' => [
        'label' => 'Жалоба на контент',
        'plural_label' => 'Жалобы на контент',
    ],

    'sections' => [
        'notice' => 'Жалоба',
        'decision' => 'Решение',
        'appeal' => 'Обжалование автором',
    ],

    'fields' => [
        'content' => 'Контент',
        'category' => 'Категория',
        'reporter' => 'Заявитель',
        'reporter_email' => 'E-mail заявителя',
        'reporter_role' => 'Статус заявителя',
        'reporter_flagged' => 'Злоупотребляющий заявитель',
        'description' => 'Описание',
        'reported_at' => 'Подана',
        'status' => 'Статус',
        'automated' => 'Автоматическое решение',
        'decision' => 'Причина',
        'decided_at' => 'Решено',
        'retain_until' => 'Хранится до',
        'authority_reported_at' => 'Сообщено властям',
        'authority_protocol' => 'Номер обращения',
        'author_notified_at' => 'Автор уведомлён',
        'appeal_until' => 'Обжалование до',
        'appealed_at' => 'Обжаловано',
        'appeal' => 'Апелляция',
        'appeal_decision' => 'Решение по апелляции',
        'restored_at' => 'Восстановлено',
        'pending' => 'Ожидает',
        'restore' => 'Восстановить контент',
    ],

    'filters' => [
        'needs_action' => 'Требует действий',
    ],

    'pending' => [
        'authority' => 'Сообщить властям',
        'appeal' => 'Решить апелляцию',
    ],

    'categories' => [
        'sexual_exploitation' => 'Сексуальная эксплуатация',
        'sexual_abuse' => 'Сексуальное насилие',
        'kidnapping' => 'Похищение',
        'grooming' => 'Груминг',
        'violence' => 'Насилие',
        'self_harm' => 'Самоповреждение',
        'bullying' => 'Травля',
        'gambling' => 'Азартные игры',
        'predatory_advertising' => 'Хищническая реклама',
        'other' => 'Другое',
    ],

    'roles' => [
        'victim' => 'Пострадавший',
        'representative' => 'Представитель пострадавшего',
        'public_prosecutor' => 'Прокуратура',
        'entity' => 'Организация по защите детей',
        'user' => 'Пользователь',
    ],

    'status' => [
        'open' => 'Открыта',
        'removed' => 'Удалён',
        'rejected' => 'Отклонена',
    ],

    'help' => [
        'remove' => 'Контент скрывается и хранится как доказательство в течение срока Marco Civil. Автору сообщается причина, он может обжаловать решение (Закон 15.211/2025, ст. 30).',
        'decision' => 'Автор увидит эту причину.',
        'authority' => 'Сообщите о признаках эксплуатации, сексуального насилия, похищения или груминга в Федеральную полицию (Закон 15.211/2025, ст. 27) и отметьте это здесь.',
        'restore' => 'Включите, чтобы вернуть контент в публикацию.',
    ],

    'actions' => [
        'remove' => 'Удалить контент',
        'reject' => 'Отклонить жалобу',
        'reported_to_authority' => 'Сообщено властям',
        'decide_appeal' => 'Решить апелляцию',
    ],

    'notifications' => [
        'removed' => 'Контент удалён.',
        'rejected' => 'Жалоба отклонена.',
        'reported' => 'Сообщение властям записано.',
        'appeal_decided' => 'Апелляция решена.',
    ],
];
