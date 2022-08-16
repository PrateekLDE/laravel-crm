<?php

return [
    [
        'key'  => 'general',
        'name' => 'admin::app.configuration.general',
        'sort' => 1,
    ], [
        'key'    => 'general.locale_settings',
        'name'   => 'admin::app.configuration.locale-settings',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'locale',
                'title'         => 'admin::app.configuration.locale',
                'type'          => 'select',
                'data_source'   => 'Webkul\Core\Core@locales'
            ],
        ],
    ],

    /**
     * Emails.
     */
    [
        'key'  => 'emails',
        'name' => 'admin::app.configuration.emails.email',
        'sort' => 2,
    ], [
        'key'  => 'emails.email_settings',
        'name' => 'admin::app.configuration.emails.settings',
        'sort' => 1,
        'fields' => [
            [
                'name'          => 'sender_name',
                'title'         => 'admin::app.configuration.emails.sender-name',
                'type'          => 'text',
                'info'          => 'admin::app.configuration.emails.sender-name-tip',
                'validation'    => 'required|max:50',
                'default_value' => config('mail.from.name'),
            ], [
                'name'          => 'sender_email',
                'title'         => 'admin::app.configuration.emails.sender-email',
                'type'          => 'text',
                'info'          => 'admin::app.configuration.emails.sender-email-tip',
                'validation'    => 'required|email',
                'default_value' => config('mail.from.address'),
            ]
        ],
    ]
];