<?php

namespace App;

use App\Controllers\BrokerController;
use App\Controllers\HomeController;
use App\Controllers\WarrantController;
use App\Repositories\BrokerRepository;
use Exception;
use Framework\Database;
use Framework\ResponseFactory;
use Framework\ServiceContainer;
use Framework\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @throws Exception
     */
    public function register(ServiceContainer $container): void
    {
        $responseFactory = $container->get(ResponseFactory::class);

        $database = $container->get(Database::class);

        $brokerController = new BrokerController($responseFactory);
        $container->set(BrokerController::class, $brokerController);

        $warrantController = new WarrantController($responseFactory);
        $container->set(WarrantController::class, $warrantController);

        $homeController = new HomeController($responseFactory);
        $container->set(HomeController::class, $homeController);
    }
}
