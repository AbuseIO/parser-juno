<?php

return [
    'parser' => [
        'name'          => 'Juno',
        'enabled'       => true,
        'sender_map'    => [
            '/abuse-auto@support.juno.com/',
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
