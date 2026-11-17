<?php

return [
    'resource' => [
        'label' => 'Denúncia de conteúdo',
        'plural_label' => 'Denúncias de conteúdo',
    ],

    'sections' => [
        'notice' => 'Denúncia',
        'decision' => 'Decisão',
        'appeal' => 'Recurso do autor',
    ],

    'fields' => [
        'content' => 'Conteúdo',
        'category' => 'Categoria',
        'reporter' => 'Denunciante',
        'reporter_email' => 'E-mail do denunciante',
        'reporter_role' => 'Qualidade do denunciante',
        'reporter_flagged' => 'Denunciante abusivo',
        'description' => 'Descrição',
        'reported_at' => 'Denunciado em',
        'status' => 'Estado',
        'automated' => 'Decisão automatizada',
        'decision' => 'Motivo',
        'decided_at' => 'Decidido em',
        'retain_until' => 'Guardado até',
        'authority_reported_at' => 'Comunicado às autoridades em',
        'authority_protocol' => 'Protocolo',
        'author_notified_at' => 'Autor notificado em',
        'appeal_until' => 'Recurso até',
        'appealed_at' => 'Recurso em',
        'appeal' => 'Recurso',
        'appeal_decision' => 'Decisão do recurso',
        'restored_at' => 'Reposto em',
        'pending' => 'Pendentes',
        'restore' => 'Repor o conteúdo',
    ],

    'filters' => [
        'needs_action' => 'Requer ação',
    ],

    'pending' => [
        'authority' => 'Comunicar às autoridades',
        'appeal' => 'Decidir o recurso',
    ],

    'categories' => [
        'sexual_exploitation' => 'Exploração sexual',
        'sexual_abuse' => 'Abuso sexual',
        'kidnapping' => 'Rapto',
        'grooming' => 'Aliciamento',
        'violence' => 'Violência',
        'self_harm' => 'Automutilação',
        'bullying' => 'Intimidação (bullying)',
        'gambling' => 'Apostas',
        'predatory_advertising' => 'Publicidade predatória',
        'other' => 'Outro',
    ],

    'roles' => [
        'victim' => 'Vítima',
        'representative' => 'Representante da vítima',
        'public_prosecutor' => 'Ministério Público',
        'entity' => 'Entidade de proteção da criança',
        'user' => 'Utilizador',
    ],

    'status' => [
        'open' => 'Aberta',
        'removed' => 'Removido',
        'rejected' => 'Rejeitada',
    ],

    'help' => [
        'remove' => 'O conteúdo é ocultado e guardado como prova pelo prazo do Marco Civil. O autor recebe o motivo e pode recorrer (Lei 15.211/2025, art. 30).',
        'decision' => 'O autor verá este motivo.',
        'authority' => 'Comunique os indícios de exploração, abuso sexual, rapto ou aliciamento à Polícia Federal (Lei 15.211/2025, art. 27) e registe aqui.',
        'restore' => 'Ative para voltar a publicar o conteúdo.',
    ],

    'actions' => [
        'remove' => 'Remover conteúdo',
        'reject' => 'Rejeitar denúncia',
        'reported_to_authority' => 'Comunicado às autoridades',
        'decide_appeal' => 'Decidir recurso',
    ],

    'notifications' => [
        'removed' => 'Conteúdo removido.',
        'rejected' => 'Denúncia rejeitada.',
        'reported' => 'Comunicação às autoridades registada.',
        'appeal_decided' => 'Recurso decidido.',
    ],
];
