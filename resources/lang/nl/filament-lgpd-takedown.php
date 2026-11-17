<?php

return [
    'resource' => [
        'label' => 'Melding van inhoud',
        'plural_label' => 'Meldingen van inhoud',
    ],

    'sections' => [
        'notice' => 'Melding',
        'decision' => 'Beslissing',
        'appeal' => 'Bezwaar van de auteur',
    ],

    'fields' => [
        'content' => 'Inhoud',
        'category' => 'Categorie',
        'reporter' => 'Melder',
        'reporter_email' => 'E-mail van de melder',
        'reporter_role' => 'Hoedanigheid van de melder',
        'reporter_flagged' => 'Misbruikende melder',
        'description' => 'Beschrijving',
        'reported_at' => 'Gemeld op',
        'status' => 'Status',
        'automated' => 'Geautomatiseerde beslissing',
        'decision' => 'Reden',
        'decided_at' => 'Beslist op',
        'retain_until' => 'Bewaard tot',
        'authority_reported_at' => 'Gemeld aan de autoriteiten op',
        'authority_protocol' => 'Dossiernummer',
        'author_notified_at' => 'Auteur geïnformeerd op',
        'appeal_until' => 'Bezwaar tot',
        'appealed_at' => 'Bezwaar op',
        'appeal' => 'Bezwaar',
        'appeal_decision' => 'Beslissing op bezwaar',
        'restored_at' => 'Hersteld op',
        'pending' => 'Openstaand',
        'restore' => 'Inhoud herstellen',
    ],

    'filters' => [
        'needs_action' => 'Actie nodig',
    ],

    'pending' => [
        'authority' => 'Melden aan de autoriteiten',
        'appeal' => 'Beslissen op bezwaar',
    ],

    'categories' => [
        'sexual_exploitation' => 'Seksuele uitbuiting',
        'sexual_abuse' => 'Seksueel misbruik',
        'kidnapping' => 'Ontvoering',
        'grooming' => 'Grooming',
        'violence' => 'Geweld',
        'self_harm' => 'Zelfbeschadiging',
        'bullying' => 'Pesten',
        'gambling' => 'Gokken',
        'predatory_advertising' => 'Uitbuitende reclame',
        'other' => 'Overig',
    ],

    'roles' => [
        'victim' => 'Slachtoffer',
        'representative' => 'Vertegenwoordiger van het slachtoffer',
        'public_prosecutor' => 'Openbaar Ministerie',
        'entity' => 'Kinderbeschermingsorganisatie',
        'user' => 'Gebruiker',
    ],

    'status' => [
        'open' => 'Open',
        'removed' => 'Verwijderd',
        'rejected' => 'Afgewezen',
    ],

    'help' => [
        'remove' => 'De inhoud wordt verborgen en als bewijs bewaard gedurende de termijn van de Marco Civil. De auteur krijgt de reden en kan bezwaar maken (Wet 15.211/2025, art. 30).',
        'decision' => 'De auteur ziet deze reden.',
        'authority' => 'Meld aanwijzingen van uitbuiting, seksueel misbruik, ontvoering of grooming aan de federale politie (Wet 15.211/2025, art. 27) en leg het hier vast.',
        'restore' => 'Zet aan om de inhoud weer online te zetten.',
    ],

    'actions' => [
        'remove' => 'Inhoud verwijderen',
        'reject' => 'Melding afwijzen',
        'reported_to_authority' => 'Gemeld aan de autoriteiten',
        'decide_appeal' => 'Beslissen op bezwaar',
    ],

    'notifications' => [
        'removed' => 'Inhoud verwijderd.',
        'rejected' => 'Melding afgewezen.',
        'reported' => 'Melding aan autoriteiten vastgelegd.',
        'appeal_decided' => 'Op bezwaar beslist.',
    ],
];
