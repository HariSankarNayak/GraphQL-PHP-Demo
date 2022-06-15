<?php
declare(strict_types=1);

use App\Application\Controllers\GraphQLController;
use Slim\App;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {
    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });
    $app->get('/graphql', 'GraphQLController:index');
    // $app->any('/graphql', GraphQLController::class . ':index');
};
