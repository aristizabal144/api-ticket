<?php

/** @var \Laravel\Lumen\Routing\Router $router */


/**---------ROUTER TICKETS--------------*/
$router->get('/tickets', 'TicketController@index');
$router->get('/tickets/{id}', 'TicketController@show');
$router->post('/tickets', 'TicketController@store');
$router->put('/tickets/{id}', 'TicketController@update');
$router->delete('/tickets/{id}', 'TicketController@destroy');