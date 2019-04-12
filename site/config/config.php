<?php

return [
    'cache' => [
        'pages' => [
            'active' => false,
            'ignore' => function ($page) {
                return $page->title()->value() === 'Do not cache me';
            }
        ]
    ],
    'debug' => true,
    'markdown' => [
        'extra' => true
    ],
    'smartypants' => true
];