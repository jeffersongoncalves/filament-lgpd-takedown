<?php

return [
    'resource' => [
        'label' => 'Denuncia de contenido',
        'plural_label' => 'Denuncias de contenido',
    ],

    'sections' => [
        'notice' => 'Denuncia',
        'decision' => 'Decisión',
        'appeal' => 'Recurso del autor',
    ],

    'fields' => [
        'content' => 'Contenido',
        'category' => 'Categoría',
        'reporter' => 'Denunciante',
        'reporter_email' => 'Correo del denunciante',
        'reporter_role' => 'Calidad del denunciante',
        'reporter_flagged' => 'Denunciante abusivo',
        'description' => 'Descripción',
        'reported_at' => 'Denunciado el',
        'status' => 'Estado',
        'automated' => 'Decisión automatizada',
        'decision' => 'Motivo',
        'decided_at' => 'Decidido el',
        'retain_until' => 'Conservado hasta',
        'authority_reported_at' => 'Comunicado a las autoridades el',
        'authority_protocol' => 'Protocolo',
        'author_notified_at' => 'Autor notificado el',
        'appeal_until' => 'Recurso hasta',
        'appealed_at' => 'Recurso el',
        'appeal' => 'Recurso',
        'appeal_decision' => 'Decisión del recurso',
        'restored_at' => 'Restablecido el',
        'pending' => 'Pendientes',
        'restore' => 'Restablecer el contenido',
    ],

    'filters' => [
        'needs_action' => 'Requiere acción',
    ],

    'pending' => [
        'authority' => 'Comunicar a las autoridades',
        'appeal' => 'Decidir el recurso',
    ],

    'categories' => [
        'sexual_exploitation' => 'Explotación sexual',
        'sexual_abuse' => 'Abuso sexual',
        'kidnapping' => 'Secuestro',
        'grooming' => 'Captación (grooming)',
        'violence' => 'Violencia',
        'self_harm' => 'Autolesión',
        'bullying' => 'Acoso (bullying)',
        'gambling' => 'Apuestas',
        'predatory_advertising' => 'Publicidad abusiva',
        'other' => 'Otro',
    ],

    'roles' => [
        'victim' => 'Víctima',
        'representative' => 'Representante de la víctima',
        'public_prosecutor' => 'Ministerio Público',
        'entity' => 'Entidad de protección infantil',
        'user' => 'Usuario',
    ],

    'status' => [
        'open' => 'Abierta',
        'removed' => 'Retirado',
        'rejected' => 'Rechazada',
    ],

    'help' => [
        'remove' => 'El contenido se oculta y se conserva como prueba durante el plazo del Marco Civil. El autor recibe el motivo y puede recurrir (Ley 15.211/2025, art. 30).',
        'decision' => 'El autor verá este motivo.',
        'authority' => 'Comunica los indicios de explotación, abuso sexual, secuestro o captación a la Policía Federal (Ley 15.211/2025, art. 27) y regístralo aquí.',
        'restore' => 'Actívalo para volver a publicar el contenido.',
    ],

    'actions' => [
        'remove' => 'Retirar contenido',
        'reject' => 'Rechazar denuncia',
        'reported_to_authority' => 'Comunicado a las autoridades',
        'decide_appeal' => 'Decidir recurso',
    ],

    'notifications' => [
        'removed' => 'Contenido retirado.',
        'rejected' => 'Denuncia rechazada.',
        'reported' => 'Comunicación a las autoridades registrada.',
        'appeal_decided' => 'Recurso decidido.',
    ],
];
