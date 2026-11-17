<?php

return [
    'resource' => [
        'label' => 'コンテンツ通報',
        'plural_label' => 'コンテンツ通報',
    ],

    'sections' => [
        'notice' => '通報',
        'decision' => '判断',
        'appeal' => '投稿者の異議申立て',
    ],

    'fields' => [
        'content' => 'コンテンツ',
        'category' => 'カテゴリ',
        'reporter' => '通報者',
        'reporter_email' => '通報者のメールアドレス',
        'reporter_role' => '通報者の立場',
        'reporter_flagged' => '濫用的な通報者',
        'description' => '説明',
        'reported_at' => '通報日時',
        'status' => 'ステータス',
        'automated' => '自動判断',
        'decision' => '理由',
        'decided_at' => '判断日時',
        'retain_until' => '保存期限',
        'authority_reported_at' => '当局への通報日時',
        'authority_protocol' => '受付番号',
        'author_notified_at' => '投稿者への通知日時',
        'appeal_until' => '異議申立て期限',
        'appealed_at' => '異議申立て日時',
        'appeal' => '異議申立て',
        'appeal_decision' => '異議への判断',
        'restored_at' => '復元日時',
        'pending' => '未対応',
        'restore' => 'コンテンツを復元',
    ],

    'filters' => [
        'needs_action' => '対応が必要',
    ],

    'pending' => [
        'authority' => '当局に通報',
        'appeal' => '異議を判断',
    ],

    'categories' => [
        'sexual_exploitation' => '性的搾取',
        'sexual_abuse' => '性的虐待',
        'kidnapping' => '誘拐',
        'grooming' => 'グルーミング',
        'violence' => '暴力',
        'self_harm' => '自傷',
        'bullying' => 'いじめ',
        'gambling' => '賭博',
        'predatory_advertising' => '搾取的な広告',
        'other' => 'その他',
    ],

    'roles' => [
        'victim' => '被害者',
        'representative' => '被害者の代理人',
        'public_prosecutor' => '検察',
        'entity' => '児童保護団体',
        'user' => 'ユーザー',
    ],

    'status' => [
        'open' => '未処理',
        'removed' => '削除済み',
        'rejected' => '却下',
    ],

    'help' => [
        'remove' => 'コンテンツは非表示になり、Marco Civil の期間中は証拠として保存されます。投稿者には理由が通知され、異議を申し立てられます（法律15.211/2025 第30条）。',
        'decision' => '投稿者にこの理由が表示されます。',
        'authority' => '搾取、性的虐待、誘拐、グルーミングの疑いは連邦警察に通報し（法律15.211/2025 第27条）、ここに記録してください。',
        'restore' => 'オンにするとコンテンツを再公開します。',
    ],

    'actions' => [
        'remove' => 'コンテンツを削除',
        'reject' => '通報を却下',
        'reported_to_authority' => '当局に通報済み',
        'decide_appeal' => '異議を判断',
    ],

    'notifications' => [
        'removed' => 'コンテンツを削除しました。',
        'rejected' => '通報を却下しました。',
        'reported' => '当局への通報を記録しました。',
        'appeal_decided' => '異議を判断しました。',
    ],
];
