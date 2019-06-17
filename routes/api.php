<?php 


$router->get('/ss', function () use ($router) {
    return $router->app->version();
});


 $api = $app->make(Dingo\Api\Routing\Router::class);