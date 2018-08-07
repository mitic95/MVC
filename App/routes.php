<?php

$router->get('', 'Pagescontroller@index');

$router->get('register', 'RegistrationController@create');
$router->post('register', 'RegistrationController@store');

$router->get('login', 'SessionsController@create');
$router->post('login', 'SessionsController@store');
$router->get('logout', 'SessionsController@logout');

$router->get('users', 'UserController@index');