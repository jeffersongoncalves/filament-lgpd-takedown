<?php

return [
    'resource' => [
        'label' => 'Segnalazione di contenuto',
        'plural_label' => 'Segnalazioni di contenuti',
    ],

    'sections' => [
        'notice' => 'Segnalazione',
        'decision' => 'Decisione',
        'appeal' => 'Ricorso dell\'autore',
    ],

    'fields' => [
        'content' => 'Contenuto',
        'category' => 'Categoria',
        'reporter' => 'Segnalante',
        'reporter_email' => 'Email del segnalante',
        'reporter_role' => 'Qualifica del segnalante',
        'reporter_flagged' => 'Segnalante abusivo',
        'description' => 'Descrizione',
        'reported_at' => 'Segnalato il',
        'status' => 'Stato',
        'automated' => 'Decisione automatizzata',
        'decision' => 'Motivo',
        'decided_at' => 'Deciso il',
        'retain_until' => 'Conservato fino al',
        'authority_reported_at' => 'Comunicato alle autorità il',
        'authority_protocol' => 'Protocollo',
        'author_notified_at' => 'Autore informato il',
        'appeal_until' => 'Ricorso entro',
        'appealed_at' => 'Ricorso il',
        'appeal' => 'Ricorso',
        'appeal_decision' => 'Decisione sul ricorso',
        'restored_at' => 'Ripristinato il',
        'pending' => 'In sospeso',
        'restore' => 'Ripristina il contenuto',
    ],

    'filters' => [
        'needs_action' => 'Richiede un\'azione',
    ],

    'pending' => [
        'authority' => 'Comunicare alle autorità',
        'appeal' => 'Decidere il ricorso',
    ],

    'categories' => [
        'sexual_exploitation' => 'Sfruttamento sessuale',
        'sexual_abuse' => 'Abuso sessuale',
        'kidnapping' => 'Sequestro',
        'grooming' => 'Adescamento',
        'violence' => 'Violenza',
        'self_harm' => 'Autolesionismo',
        'bullying' => 'Bullismo',
        'gambling' => 'Gioco d\'azzardo',
        'predatory_advertising' => 'Pubblicità predatoria',
        'other' => 'Altro',
    ],

    'roles' => [
        'victim' => 'Vittima',
        'representative' => 'Rappresentante della vittima',
        'public_prosecutor' => 'Pubblico ministero',
        'entity' => 'Ente di tutela dell\'infanzia',
        'user' => 'Utente',
    ],

    'status' => [
        'open' => 'Aperta',
        'removed' => 'Rimosso',
        'rejected' => 'Respinta',
    ],

    'help' => [
        'remove' => 'Il contenuto viene nascosto e conservato come prova per il periodo del Marco Civil. L\'autore riceve il motivo e può fare ricorso (Legge 15.211/2025, art. 30).',
        'decision' => 'L\'autore vedrà questo motivo.',
        'authority' => 'Comunica gli indizi di sfruttamento, abuso sessuale, sequestro o adescamento alla Polizia federale (Legge 15.211/2025, art. 27), poi registralo qui.',
        'restore' => 'Attiva per rimettere online il contenuto.',
    ],

    'actions' => [
        'remove' => 'Rimuovi contenuto',
        'reject' => 'Respingi segnalazione',
        'reported_to_authority' => 'Comunicato alle autorità',
        'decide_appeal' => 'Decidi ricorso',
    ],

    'notifications' => [
        'removed' => 'Contenuto rimosso.',
        'rejected' => 'Segnalazione respinta.',
        'reported' => 'Comunicazione alle autorità registrata.',
        'appeal_decided' => 'Ricorso deciso.',
    ],
];
