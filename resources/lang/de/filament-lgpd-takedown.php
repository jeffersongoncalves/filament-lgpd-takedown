<?php

return [
    'resource' => [
        'label' => 'Inhaltsmeldung',
        'plural_label' => 'Inhaltsmeldungen',
    ],

    'sections' => [
        'notice' => 'Meldung',
        'decision' => 'Entscheidung',
        'appeal' => 'Einspruch der verfassenden Person',
    ],

    'fields' => [
        'content' => 'Inhalt',
        'category' => 'Kategorie',
        'reporter' => 'Meldende Person',
        'reporter_email' => 'E-Mail der meldenden Person',
        'reporter_role' => 'Rolle der meldenden Person',
        'reporter_flagged' => 'Missbräuchlich meldend',
        'description' => 'Beschreibung',
        'reported_at' => 'Gemeldet am',
        'status' => 'Status',
        'automated' => 'Automatisierte Entscheidung',
        'decision' => 'Begründung',
        'decided_at' => 'Entschieden am',
        'retain_until' => 'Aufbewahrt bis',
        'authority_reported_at' => 'An Behörden gemeldet am',
        'authority_protocol' => 'Aktenzeichen',
        'author_notified_at' => 'Verfassende Person benachrichtigt am',
        'appeal_until' => 'Einspruch bis',
        'appealed_at' => 'Einspruch am',
        'appeal' => 'Einspruch',
        'appeal_decision' => 'Entscheidung über den Einspruch',
        'restored_at' => 'Wiederhergestellt am',
        'pending' => 'Offen',
        'restore' => 'Inhalt wiederherstellen',
    ],

    'filters' => [
        'needs_action' => 'Handlungsbedarf',
    ],

    'pending' => [
        'authority' => 'An Behörden melden',
        'appeal' => 'Über Einspruch entscheiden',
    ],

    'categories' => [
        'sexual_exploitation' => 'Sexuelle Ausbeutung',
        'sexual_abuse' => 'Sexueller Missbrauch',
        'kidnapping' => 'Entführung',
        'grooming' => 'Grooming',
        'violence' => 'Gewalt',
        'self_harm' => 'Selbstverletzung',
        'bullying' => 'Mobbing',
        'gambling' => 'Glücksspiel',
        'predatory_advertising' => 'Ausbeuterische Werbung',
        'other' => 'Sonstiges',
    ],

    'roles' => [
        'victim' => 'Betroffene Person',
        'representative' => 'Vertretung der betroffenen Person',
        'public_prosecutor' => 'Staatsanwaltschaft',
        'entity' => 'Kinderschutzorganisation',
        'user' => 'Nutzende Person',
    ],

    'status' => [
        'open' => 'Offen',
        'removed' => 'Entfernt',
        'rejected' => 'Abgelehnt',
    ],

    'help' => [
        'remove' => 'Der Inhalt wird ausgeblendet und für die Frist des Marco Civil als Beweismittel aufbewahrt. Die verfassende Person erhält die Begründung und kann Einspruch einlegen (Lei 15.211/2025, Art. 30).',
        'decision' => 'Die verfassende Person sieht diese Begründung.',
        'authority' => 'Melden Sie Hinweise auf Ausbeutung, sexuellen Missbrauch, Entführung oder Grooming der Polícia Federal (Lei 15.211/2025, Art. 27) und erfassen Sie es hier.',
        'restore' => 'Aktivieren, um den Inhalt wieder online zu stellen.',
    ],

    'actions' => [
        'remove' => 'Inhalt entfernen',
        'reject' => 'Meldung ablehnen',
        'reported_to_authority' => 'An Behörden gemeldet',
        'decide_appeal' => 'Über Einspruch entscheiden',
    ],

    'notifications' => [
        'removed' => 'Inhalt entfernt.',
        'rejected' => 'Meldung abgelehnt.',
        'reported' => 'Behördenmeldung erfasst.',
        'appeal_decided' => 'Über Einspruch entschieden.',
    ],
];
