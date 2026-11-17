<?php

return [
    'resource' => [
        'label' => 'Zgłoszenie treści',
        'plural_label' => 'Zgłoszenia treści',
    ],

    'sections' => [
        'notice' => 'Zgłoszenie',
        'decision' => 'Decyzja',
        'appeal' => 'Odwołanie autora',
    ],

    'fields' => [
        'content' => 'Treść',
        'category' => 'Kategoria',
        'reporter' => 'Zgłaszający',
        'reporter_email' => 'E-mail zgłaszającego',
        'reporter_role' => 'Rola zgłaszającego',
        'reporter_flagged' => 'Zgłaszający nadużywa zgłoszeń',
        'description' => 'Opis',
        'reported_at' => 'Zgłoszono',
        'status' => 'Status',
        'automated' => 'Decyzja zautomatyzowana',
        'decision' => 'Uzasadnienie',
        'decided_at' => 'Zdecydowano',
        'retain_until' => 'Przechowywane do',
        'authority_reported_at' => 'Zgłoszono organom',
        'authority_protocol' => 'Numer sprawy',
        'author_notified_at' => 'Autor powiadomiony',
        'appeal_until' => 'Odwołanie do',
        'appealed_at' => 'Odwołanie z dnia',
        'appeal' => 'Odwołanie',
        'appeal_decision' => 'Decyzja w sprawie odwołania',
        'restored_at' => 'Przywrócono',
        'pending' => 'Oczekujące',
        'restore' => 'Przywróć treść',
    ],

    'filters' => [
        'needs_action' => 'Wymaga działania',
    ],

    'pending' => [
        'authority' => 'Zgłoś organom',
        'appeal' => 'Rozpatrz odwołanie',
    ],

    'categories' => [
        'sexual_exploitation' => 'Wykorzystywanie seksualne',
        'sexual_abuse' => 'Wykorzystanie seksualne',
        'kidnapping' => 'Porwanie',
        'grooming' => 'Grooming',
        'violence' => 'Przemoc',
        'self_harm' => 'Samookaleczenie',
        'bullying' => 'Nękanie',
        'gambling' => 'Hazard',
        'predatory_advertising' => 'Reklama wykorzystująca',
        'other' => 'Inne',
    ],

    'roles' => [
        'victim' => 'Ofiara',
        'representative' => 'Przedstawiciel ofiary',
        'public_prosecutor' => 'Prokuratura',
        'entity' => 'Organizacja ochrony dzieci',
        'user' => 'Użytkownik',
    ],

    'status' => [
        'open' => 'Otwarte',
        'removed' => 'Usunięte',
        'rejected' => 'Odrzucone',
    ],

    'help' => [
        'remove' => 'Treść zostaje ukryta i zachowana jako dowód przez okres wymagany przez Marco Civil. Autor otrzymuje uzasadnienie i może się odwołać (Ustawa 15.211/2025, art. 30).',
        'decision' => 'Autor zobaczy to uzasadnienie.',
        'authority' => 'Zgłoś przesłanki wykorzystywania, wykorzystania seksualnego, porwania lub groomingu Policji Federalnej (Ustawa 15.211/2025, art. 27), a potem zapisz to tutaj.',
        'restore' => 'Włącz, aby przywrócić treść.',
    ],

    'actions' => [
        'remove' => 'Usuń treść',
        'reject' => 'Odrzuć zgłoszenie',
        'reported_to_authority' => 'Zgłoszono organom',
        'decide_appeal' => 'Rozpatrz odwołanie',
    ],

    'notifications' => [
        'removed' => 'Treść usunięta.',
        'rejected' => 'Zgłoszenie odrzucone.',
        'reported' => 'Zapisano zgłoszenie do organów.',
        'appeal_decided' => 'Odwołanie rozpatrzone.',
    ],
];
