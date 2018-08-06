<?php

$router->get('', 'Pagescontroller@index');

$router->get('register', 'Registrationcontroller@create');
$router->post('register', 'Registrationcontroller@store');

$router->get('login', 'Sessionscontroller@create');
$router->post('login', 'Sessionscontroller@store');
$router->get('logout', 'Sessionscontroller@logout');

$router->get('users', 'Usercontroller@index');