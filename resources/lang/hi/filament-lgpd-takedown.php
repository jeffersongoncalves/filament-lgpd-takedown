<?php

return [
    'resource' => [
        'label' => 'सामग्री शिकायत',
        'plural_label' => 'सामग्री शिकायतें',
    ],

    'sections' => [
        'notice' => 'शिकायत',
        'decision' => 'निर्णय',
        'appeal' => 'लेखक की अपील',
    ],

    'fields' => [
        'content' => 'सामग्री',
        'category' => 'श्रेणी',
        'reporter' => 'शिकायतकर्ता',
        'reporter_email' => 'शिकायतकर्ता का ईमेल',
        'reporter_role' => 'शिकायतकर्ता की भूमिका',
        'reporter_flagged' => 'दुरुपयोगी शिकायतकर्ता',
        'description' => 'विवरण',
        'reported_at' => 'शिकायत की तिथि',
        'status' => 'स्थिति',
        'automated' => 'स्वचालित निर्णय',
        'decision' => 'कारण',
        'decided_at' => 'निर्णय की तिथि',
        'retain_until' => 'तक रखा गया',
        'authority_reported_at' => 'अधिकारियों को सूचित करने की तिथि',
        'authority_protocol' => 'प्रोटोकॉल',
        'author_notified_at' => 'लेखक को सूचित करने की तिथि',
        'appeal_until' => 'अपील की अंतिम तिथि',
        'appealed_at' => 'अपील की तिथि',
        'appeal' => 'अपील',
        'appeal_decision' => 'अपील पर निर्णय',
        'restored_at' => 'बहाली की तिथि',
        'pending' => 'लंबित',
        'restore' => 'सामग्री बहाल करें',
    ],

    'filters' => [
        'needs_action' => 'कार्रवाई आवश्यक',
    ],

    'pending' => [
        'authority' => 'अधिकारियों को सूचित करें',
        'appeal' => 'अपील पर निर्णय लें',
    ],

    'categories' => [
        'sexual_exploitation' => 'यौन शोषण',
        'sexual_abuse' => 'यौन दुर्व्यवहार',
        'kidnapping' => 'अपहरण',
        'grooming' => 'ग्रूमिंग',
        'violence' => 'हिंसा',
        'self_harm' => 'आत्म-क्षति',
        'bullying' => 'धमकाना',
        'gambling' => 'जुआ',
        'predatory_advertising' => 'शोषणकारी विज्ञापन',
        'other' => 'अन्य',
    ],

    'roles' => [
        'victim' => 'पीड़ित',
        'representative' => 'पीड़ित का प्रतिनिधि',
        'public_prosecutor' => 'लोक अभियोजक',
        'entity' => 'बाल संरक्षण संस्था',
        'user' => 'उपयोगकर्ता',
    ],

    'status' => [
        'open' => 'खुली',
        'removed' => 'हटाई गई',
        'rejected' => 'अस्वीकृत',
    ],

    'help' => [
        'remove' => 'सामग्री छिपा दी जाती है और Marco Civil की अवधि तक सबूत के रूप में रखी जाती है। लेखक को कारण बताया जाता है और वह अपील कर सकता है (कानून 15.211/2025, अनुच्छेद 30)।',
        'decision' => 'लेखक यह कारण देखेगा।',
        'authority' => 'शोषण, यौन दुर्व्यवहार, अपहरण या ग्रूमिंग के संकेत संघीय पुलिस को बताएँ (कानून 15.211/2025, अनुच्छेद 27), फिर यहाँ दर्ज करें।',
        'restore' => 'सामग्री को फिर से ऑनलाइन करने के लिए चालू करें।',
    ],

    'actions' => [
        'remove' => 'सामग्री हटाएँ',
        'reject' => 'शिकायत अस्वीकार करें',
        'reported_to_authority' => 'अधिकारियों को सूचित किया',
        'decide_appeal' => 'अपील पर निर्णय लें',
    ],

    'notifications' => [
        'removed' => 'सामग्री हटाई गई।',
        'rejected' => 'शिकायत अस्वीकार की गई।',
        'reported' => 'अधिकारियों को सूचना दर्ज की गई।',
        'appeal_decided' => 'अपील पर निर्णय हुआ।',
    ],
];
