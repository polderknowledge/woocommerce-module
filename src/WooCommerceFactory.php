<?php

namespace PolderKnowledge\WooCommerce;

use Automattic\WooCommerce\Client;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class WooCommerceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $options = $options ?? ['config_key' => 'woocommerce'];

        $config = $container->get('config')[$options['config_key']];

        return new Client(
            $config['url'],
            $config['consumer_key'],
            $config['consumer_secret'],
            $config['options']
        );
    }
}
