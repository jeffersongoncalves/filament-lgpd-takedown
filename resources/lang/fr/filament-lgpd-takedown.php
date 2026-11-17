<?php

return [
    'resource' => [
        'label' => 'Signalement de contenu',
        'plural_label' => 'Signalements de contenu',
    ],

    'sections' => [
        'notice' => 'Signalement',
        'decision' => 'Décision',
        'appeal' => 'Recours de l\'auteur',
    ],

    'fields' => [
        'content' => 'Contenu',
        'category' => 'Catégorie',
        'reporter' => 'Auteur du signalement',
        'reporter_email' => 'E-mail de l\'auteur du signalement',
        'reporter_role' => 'Qualité de l\'auteur du signalement',
        'reporter_flagged' => 'Signalements abusifs',
        'description' => 'Description',
        'reported_at' => 'Signalé le',
        'status' => 'Statut',
        'automated' => 'Décision automatisée',
        'decision' => 'Motif',
        'decided_at' => 'Décidé le',
        'retain_until' => 'Conservé jusqu\'au',
        'authority_reported_at' => 'Transmis aux autorités le',
        'authority_protocol' => 'Numéro de dossier',
        'author_notified_at' => 'Auteur informé le',
        'appeal_until' => 'Recours jusqu\'au',
        'appealed_at' => 'Recours le',
        'appeal' => 'Recours',
        'appeal_decision' => 'Décision sur le recours',
        'restored_at' => 'Rétabli le',
        'pending' => 'En attente',
        'restore' => 'Rétablir le contenu',
    ],

    'filters' => [
        'needs_action' => 'Action requise',
    ],

    'pending' => [
        'authority' => 'Transmettre aux autorités',
        'appeal' => 'Statuer sur le recours',
    ],

    'categories' => [
        'sexual_exploitation' => 'Exploitation sexuelle',
        'sexual_abuse' => 'Abus sexuel',
        'kidnapping' => 'Enlèvement',
        'grooming' => 'Pédopiégeage',
        'violence' => 'Violence',
        'self_harm' => 'Automutilation',
        'bullying' => 'Harcèlement',
        'gambling' => 'Jeux d\'argent',
        'predatory_advertising' => 'Publicité abusive',
        'other' => 'Autre',
    ],

    'roles' => [
        'victim' => 'Victime',
        'representative' => 'Représentant de la victime',
        'public_prosecutor' => 'Ministère public',
        'entity' => 'Association de protection de l\'enfance',
        'user' => 'Utilisateur',
    ],

    'status' => [
        'open' => 'Ouvert',
        'removed' => 'Retiré',
        'rejected' => 'Rejeté',
    ],

    'help' => [
        'remove' => 'Le contenu est masqué et conservé comme preuve pendant la durée prévue par le Marco Civil. L\'auteur reçoit le motif et peut faire un recours (Loi 15.211/2025, art. 30).',
        'decision' => 'L\'auteur verra ce motif.',
        'authority' => 'Transmettez les indices d\'exploitation, d\'abus sexuel, d\'enlèvement ou de pédopiégeage à la Police fédérale (Loi 15.211/2025, art. 27), puis enregistrez-le ici.',
        'restore' => 'Activez pour remettre le contenu en ligne.',
    ],

    'actions' => [
        'remove' => 'Retirer le contenu',
        'reject' => 'Rejeter le signalement',
        'reported_to_authority' => 'Transmis aux autorités',
        'decide_appeal' => 'Statuer sur le recours',
    ],

    'notifications' => [
        'removed' => 'Contenu retiré.',
        'rejected' => 'Signalement rejeté.',
        'reported' => 'Transmission aux autorités enregistrée.',
        'appeal_decided' => 'Recours tranché.',
    ],
];
