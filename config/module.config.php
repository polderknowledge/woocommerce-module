<?php

namespace PolderKnowledge\WooCommerce;

return [
    'service_manager' => [
        'factories' => [
            \Automattic\WooCommerce\Client::class => WooCommerceFactory::class,
        ],
    ],
];
