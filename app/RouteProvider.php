<?php

namespace App;

use App\Controllers\BrokerController;
use App\Controllers\HomeController;
use App\Controllers\WarrantController;
use Framework\Router;
use Framework\RouteProviderInterface;
use Framework\ServiceContainer;

class RouteProvider implements RouteProviderInterface
{
    /**
     * @throws \Exception
     */
    public function register(Router $router, ServiceContainer $container): void
    {
        $homeController = $container->get(HomeController::class);
        $router->addRoute('GET', '/', [$homeController, "index"]);
        $router->addRoute('GET', '/history', [$homeController, "about"]);

        $brokerController = $container->get(BrokerController::class);
        $router->addRoute('GET', '/brokers', [$brokerController, "index"]);
        $router->addRoute('GET', '/brokers/(?<id>\d+)', [$brokerController, "show"]);
        $router->addRoute('GET', '/brokers/create', [$brokerController, "create"]);

        $warrantController = $container->get(WarrantController::class);
        $router->addRoute('GET', '/warrants/create', [$warrantController, "create"]);
    }
}
