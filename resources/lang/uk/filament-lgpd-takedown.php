<?php

return [
    'resource' => [
        'label' => 'Скарга на контент',
        'plural_label' => 'Скарги на контент',
    ],

    'sections' => [
        'notice' => 'Скарга',
        'decision' => 'Рішення',
        'appeal' => 'Оскарження автором',
    ],

    'fields' => [
        'content' => 'Контент',
        'category' => 'Категорія',
        'reporter' => 'Заявник',
        'reporter_email' => 'E-mail заявника',
        'reporter_role' => 'Статус заявника',
        'reporter_flagged' => 'Заявник, що зловживає',
        'description' => 'Опис',
        'reported_at' => 'Подано',
        'status' => 'Статус',
        'automated' => 'Автоматизоване рішення',
        'decision' => 'Причина',
        'decided_at' => 'Вирішено',
        'retain_until' => 'Зберігається до',
        'authority_reported_at' => 'Повідомлено органам',
        'authority_protocol' => 'Номер звернення',
        'author_notified_at' => 'Автора повідомлено',
        'appeal_until' => 'Оскарження до',
        'appealed_at' => 'Оскаржено',
        'appeal' => 'Апеляція',
        'appeal_decision' => 'Рішення щодо апеляції',
        'restored_at' => 'Відновлено',
        'pending' => 'Очікує',
        'restore' => 'Відновити контент',
    ],

    'filters' => [
        'needs_action' => 'Потребує дій',
    ],

    'pending' => [
        'authority' => 'Повідомити органам',
        'appeal' => 'Вирішити апеляцію',
    ],

    'categories' => [
        'sexual_exploitation' => 'Сексуальна експлуатація',
        'sexual_abuse' => 'Сексуальне насильство',
        'kidnapping' => 'Викрадення',
        'grooming' => 'Грумінг',
        'violence' => 'Насильство',
        'self_harm' => 'Самоушкодження',
        'bullying' => 'Цькування',
        'gambling' => 'Азартні ігри',
        'predatory_advertising' => 'Хижацька реклама',
        'other' => 'Інше',
    ],

    'roles' => [
        'victim' => 'Потерпілий',
        'representative' => 'Представник потерпілого',
        'public_prosecutor' => 'Прокуратура',
        'entity' => 'Організація захисту дітей',
        'user' => 'Користувач',
    ],

    'status' => [
        'open' => 'Відкрита',
        'removed' => 'Видалено',
        'rejected' => 'Відхилено',
    ],

    'help' => [
        'remove' => 'Контент приховується і зберігається як доказ протягом строку Marco Civil. Автор отримує причину і може оскаржити рішення (Закон 15.211/2025, ст. 30).',
        'decision' => 'Автор побачить цю причину.',
        'authority' => 'Повідомте про ознаки експлуатації, сексуального насильства, викрадення чи грумінгу Федеральній поліції (Закон 15.211/2025, ст. 27) і зафіксуйте це тут.',
        'restore' => 'Увімкніть, щоб повернути контент у публікацію.',
    ],

    'actions' => [
        'remove' => 'Видалити контент',
        'reject' => 'Відхилити скаргу',
        'reported_to_authority' => 'Повідомлено органам',
        'decide_appeal' => 'Вирішити апеляцію',
    ],

    'notifications' => [
        'removed' => 'Контент видалено.',
        'rejected' => 'Скаргу відхилено.',
        'reported' => 'Повідомлення органам зафіксовано.',
        'appeal_decided' => 'Апеляцію вирішено.',
    ],
];
