<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/config/settings.php';

$app = AppFactory::create();
$app->setBasePath(DIRETORIO_PRINCIPAL);
$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

//Rotas
(require __DIR__ . '/config/routes.php')($app);

$app->run();