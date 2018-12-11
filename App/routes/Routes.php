<?php

/**
 * [$router description]
 * @var Network
 */
$router = new Codefii\Routing\Router();
$router->routes('/',['Home@index']);
$router->routes('/dashboard',['Dashboard@index']);
$router->routes('/dashboard/add_car',['Dashboard@add_car']);
$router->routes('/dashboard/add_driver',['Dashboard@add_driver']);
$router->routes('/dashboard/view_cars',['Dashboard@view_car']);
$router->routes('/dashboard/view_drivers',['Dashboard@view_drivers']);
$router->routes('/dashboard/add_offense',['Dashboard@add_offense']);
$router->routes('/dashboard/add_committed_offense',['Dashboard@committed']);
$router->routes('/dashboard/view_offenders',['Dashboard@view_offenders']);
$router->routes('/dashboard/logout',['Dashboard@logout']);
$router->routes('/dashboard/search_offender',['Dashboard@search']);
$router->routes('/dashboard/add_admin',['Dashboard@add_admin']);
$router->routes('/dashboard/view_admin',['Dashboard@view_admin']);
$router->routes('/dashboard/search_results/{key:([a-zA-Z0-9-])*}',['Dashboard@results']);



