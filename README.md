# ZF3 WooCommerce client

WooCommerce client for Zend Framework 3.

This wraps [the php client](https://github.com/woocommerce/wc-api-php) so you can load the configuration.

## Installation

```
composer require polderknowledge/woocommerce-module
```

## Usage

Step 1. Add to application.config.php:

```
return [
    'modules' => [
        'PolderKnowledge\\WooCommerce',
    ],
]
```

Step 2. Copy config/woocommerce.global.php.dist to your projects config/autoload directory and adjust where necessary

Step 3. Use in application:

```
$container->get(\Automattic\WooCommerce\Client::class);
```
