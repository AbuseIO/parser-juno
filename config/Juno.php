<?php

return [
    'parser' => [
        'name'          => 'UOL',
        'enabled'       => true,
        'sender_map'    => [
            '/abuse-auto@support.(juno|netzero).com/',
        ],
        'body_map'      => [
            //
        ],
    ],

    'feeds' => [
        'default' => [
            'class'     => 'SPAM',
            'type'      => 'Abuse',
            'enabled'   => true,
            'fields'    => [
                'Source-IP',
                'Feedback-Type',
                'Arrival-Date',
            ],
        ],

    ],
];
