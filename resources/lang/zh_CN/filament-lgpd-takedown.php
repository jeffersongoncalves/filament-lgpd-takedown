<?php

return [
    'resource' => [
        'label' => '内容举报',
        'plural_label' => '内容举报',
    ],

    'sections' => [
        'notice' => '举报',
        'decision' => '处理决定',
        'appeal' => '作者申诉',
    ],

    'fields' => [
        'content' => '内容',
        'category' => '类别',
        'reporter' => '举报人',
        'reporter_email' => '举报人邮箱',
        'reporter_role' => '举报人身份',
        'reporter_flagged' => '滥用举报',
        'description' => '描述',
        'reported_at' => '举报时间',
        'status' => '状态',
        'automated' => '自动化决定',
        'decision' => '理由',
        'decided_at' => '决定时间',
        'retain_until' => '保存至',
        'authority_reported_at' => '报告主管机关时间',
        'authority_protocol' => '受理编号',
        'author_notified_at' => '通知作者时间',
        'appeal_until' => '申诉截止',
        'appealed_at' => '申诉时间',
        'appeal' => '申诉',
        'appeal_decision' => '申诉决定',
        'restored_at' => '恢复时间',
        'pending' => '待办',
        'restore' => '恢复内容',
    ],

    'filters' => [
        'needs_action' => '需要处理',
    ],

    'pending' => [
        'authority' => '报告主管机关',
        'appeal' => '处理申诉',
    ],

    'categories' => [
        'sexual_exploitation' => '性剥削',
        'sexual_abuse' => '性虐待',
        'kidnapping' => '绑架',
        'grooming' => '诱骗（grooming）',
        'violence' => '暴力',
        'self_harm' => '自残',
        'bullying' => '欺凌',
        'gambling' => '赌博',
        'predatory_advertising' => '掠夺性广告',
        'other' => '其他',
    ],

    'roles' => [
        'victim' => '受害人',
        'representative' => '受害人代理人',
        'public_prosecutor' => '检察机关',
        'entity' => '儿童保护机构',
        'user' => '用户',
    ],

    'status' => [
        'open' => '待处理',
        'removed' => '已删除',
        'rejected' => '已驳回',
    ],

    'help' => [
        'remove' => '内容将被隐藏，并在 Marco Civil 规定的期限内作为证据保存。作者会收到理由并可提出申诉（第15.211/2025号法律第30条）。',
        'decision' => '作者将看到此理由。',
        'authority' => '请将涉嫌剥削、性虐待、绑架或诱骗的情况报告联邦警察（第15.211/2025号法律第27条），然后在此记录。',
        'restore' => '开启后内容将重新上线。',
    ],

    'actions' => [
        'remove' => '删除内容',
        'reject' => '驳回举报',
        'reported_to_authority' => '已报告主管机关',
        'decide_appeal' => '处理申诉',
    ],

    'notifications' => [
        'removed' => '内容已删除。',
        'rejected' => '举报已驳回。',
        'reported' => '已记录向主管机关的报告。',
        'appeal_decided' => '申诉已处理。',
    ],
];
