<?php

namespace PolderKnowledge\WooCommerce\Test;

use Automattic\WooCommerce\Client;
use PHPUnit\Framework\TestCase;
use Zend\Mvc\Application;

class FactoryTest extends TestCase
{
    public function testFactory()
    {
        $application = Application::init([
            'modules' => [
                'Zend\\Router',
                'PolderKnowledge\\WooCommerce',
            ],
            'module_listener_options' => [
                'config_glob_paths' => [
                    __DIR__ . '/woocommerce.global.php',
                ],
            ],
        ]);

        $serviceManager = $application->getServiceManager();

        self::assertInstanceOf(Client::class, $serviceManager->get(Client::class));
    }
}
